<?php
namespace STS\core\Providers\App;

use STS\core\Container;
use STS\core\Providers\ServiceProvider;
use STS\core\Database\Connection;
use STS\core\Routing\Router;
use STS\core\Http\HttpKernel;
use STS\core\Http\Request;
use STS\core\Themes\ThemeManager;
use STS\core\Translation\Translation;
use STS\core\Themes\GlobalVariables;
use STS\core\Helpers\FormHelper;

class AppServiceProvider extends ServiceProvider
{
    protected ?Container $container;
    protected $starttime;
    protected $endtime;

    public function __construct(Container $container) {
        $this->container = $container;
    }

    public function register(): void
    {
        $this->starttime = microtime(true);

        // Înregistrează configuratiilor în container
        $this->container->singleton('config', function() {
            return require ROOT_PATH . '/config/app.php';
        });

        $this->container->singleton('db.config', function() {
            return require ROOT_PATH . '/config/database.php';
        });

        $this->container->singleton('theme.config', function() {
            return require ROOT_PATH . '/config/theme.php';
        });

        // Înregistrează servicii în container
        $this->container->singleton(Connection::class, function($container) {
            $config = $container->make('db.config');
            return Connection::getInstance($config['connections']['mysql']);
        });

        $this->container->singleton('Router', function($container) {
            return Router::getInstance();
        });

        $this->container->singleton(HttpKernel::class, function($container) {
            return new HttpKernel($container);
        });
        
        $this->container->singleton('Request', function($container) {
            return Request::capture();
        });

        // Înregistrează alte servicii necesare
        $this->registerSessionHandler();
        $this->registerThemeHandler();
    }

    protected function registerSessionHandler(): void {
        $this->container->singleton('session.handler', function($container) {
            $connection = $container->make(Connection::class);
            return new \STS\core\Session\CustomSessionHandler($connection);
        });
    }

    protected function registerThemeHandler(): void {
        // Înregistrează temele
        $this->container->singleton('theme', function ($container) {
            return new ThemeManager();
        });

        // Înregistrează traducerile
        $this->container->singleton('translation', function ($container) {
            $config = $container->make('theme.config');
            return new Translation($config['locale']);
        });

        // Înregistrează variabilelor globale
        $this->container->singleton('globals', function ($container) {
            return new GlobalVariables();
        });

        $this->container->singleton('form_helper', function ($container) {
            return new FormHelper();
        });
    }

    protected function registerAppProvidersHandler(): void {

    }

    public function boot(): void
    {
        $config = $this->container->make('config');

        if(is_array($config['providers']) && !empty($config['providers'])) {
            // Incarcare provideri din aplicatie !
            // Încărcarea providerilor definiți în `config/app.php`

            foreach ($config['providers'] as $providerClass) {
                try {
                    if (class_exists($providerClass) && method_exists($providerClass, 'register')) {
                        $providerClass::register($this->container);
                    }
                } catch (\Exception $e) {
                    // Loghează eroarea sau aruncă o excepție
                    throw new \Exception("Eroare la înregistrarea providerului: " . $providerClass);
                    error_log("Eroare la înregistrarea providerului: " . $providerClass);
                }
            }
        }

        if($config['env'] === "dev" && $config['debug'] !== false && $config['url'] !== "localhost")
        {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }

        if($config['env'] === "production")
        {
            // TODO: Production
        }



        // Incarcare variabile si date din .env
        load_env();

        // Start sessiune si handler
        session_set_save_handler($this->container->make('session.handler'), true);
        session_start();

        date_default_timezone_set($config['default_timezone']);
        locale_set_default($config['locale']);

        $theme = $this->container->make('theme');
        $config = $this->container->make('theme.config');
        $theme->assign('app_name', env('APP_NAME', 'STS Framework'));

        $theme->setActiveTheme($config['active_theme']);
        $theme->setLocale($config['locale']);

        $this->endtime = microtime(true);

        $globals = app('globals');
        $globals->set('loading_app', "<p class='text-center load_app_time'>Your application runing. | Loaded in ". number_format(($this->endtime - $this->starttime), 3) ." secounds</p>");
    }
}