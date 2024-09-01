<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93aac646e888c9f092cf694ccde7a667
{
    public static $files = array (
        '21dbb95f3b09b33deaff95e964625e6a' => __DIR__ . '/../..' . '/bootstrap/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'STS\\core\\' => 9,
            'STS\\cli\\' => 8,
            'STS\\app\\Modules\\' => 16,
            'STS\\app\\Controllers\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'STS\\core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'STS\\cli\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cli',
        ),
        'STS\\app\\Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Modules',
        ),
        'STS\\app\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Middleware\\AdminAuthMiddleware' => __DIR__ . '/../..' . '/app/Middleware/AdminAuthMiddleware.php',
        'App\\Middleware\\AuthMiddleware' => __DIR__ . '/../..' . '/app/Middleware/AuthMiddleware.php',
        'App\\Middleware\\SetThemeMiddleware' => __DIR__ . '/../..' . '/app/Middleware/SetThemeMiddleware.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'STS\\app\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/Controllers/AdminController.php',
        'STS\\app\\Controllers\\AuthController' => __DIR__ . '/../..' . '/app/Controllers/AuthController.php',
        'STS\\app\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'STS\\cli\\commands\\CommandInterface' => __DIR__ . '/../..' . '/cli/commands/CommandInterface.php',
        'STS\\cli\\commands\\GreetCommand' => __DIR__ . '/../..' . '/cli/commands/GreetCommand.php',
        'STS\\cli\\commands\\HelpCommand' => __DIR__ . '/../..' . '/cli/commands/HelpCommand.php',
        'STS\\cli\\commands\\MigrateCommand' => __DIR__ . '/../..' . '/cli/commands/MigrateCommand.php',
        'STS\\core\\Auth\\Auth' => __DIR__ . '/../..' . '/core/Auth/Auth.php',
        'STS\\core\\Auth\\AuthService' => __DIR__ . '/../..' . '/core/Auth/AuthService.php',
        'STS\\core\\Cache\\CacheDriver' => __DIR__ . '/../..' . '/core/Cache/CacheDriver.php',
        'STS\\core\\Cache\\CacheManager' => __DIR__ . '/../..' . '/core/Cache/CacheManager.php',
        'STS\\core\\Config\\ConfigManager' => __DIR__ . '/../..' . '/core/Config/ConfigManager.php',
        'STS\\core\\Container' => __DIR__ . '/../..' . '/core/Container.php',
        'STS\\core\\ContainerInterface' => __DIR__ . '/../..' . '/core/ContainerInterface.php',
        'STS\\core\\Controller' => __DIR__ . '/../..' . '/core/Controller.php',
        'STS\\core\\Database\\Connection' => __DIR__ . '/../..' . '/core/Database/Connection.php',
        'STS\\core\\Database\\Migration\\Blueprint' => __DIR__ . '/../..' . '/core/Database/Migration/Blueprint.php',
        'STS\\core\\Database\\Migration\\Schema' => __DIR__ . '/../..' . '/core/Database/Migration/Schema.php',
        'STS\\core\\Database\\Migration\\migration_file' => __DIR__ . '/../..' . '/core/Database/Migration/migration_file.php',
        'STS\\core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/Database/QueryBuilder.php',
        'STS\\core\\Events\\EventDispatcher' => __DIR__ . '/../..' . '/core/Events/EventDispatcher.php',
        'STS\\core\\Events\\EventListener' => __DIR__ . '/../..' . '/core/Events/EventListener.php',
        'STS\\core\\Events\\EventManager' => __DIR__ . '/../..' . '/core/Events/EventManager.php',
        'STS\\core\\Exception\\ControllerNotFoundException' => __DIR__ . '/../..' . '/core/Exception/ControllerNotFoundException.php',
        'STS\\core\\Exception\\MethodNotFoundException' => __DIR__ . '/../..' . '/core/Exception/MethodNotFoundException.php',
        'STS\\core\\Facades\\Facade' => __DIR__ . '/../..' . '/core/Facades/Facade.php',
        'STS\\core\\Facades\\Globals' => __DIR__ . '/../..' . '/core/Facades/Globals.php',
        'STS\\core\\Facades\\Kernel' => __DIR__ . '/../..' . '/core/Facades/Kernel.php',
        'STS\\core\\Facades\\ResponseFacade' => __DIR__ . '/../..' . '/core/Facades/ResponseFacade.php',
        'STS\\core\\Facades\\Theme' => __DIR__ . '/../..' . '/core/Facades/Theme.php',
        'STS\\core\\Facades\\Translate' => __DIR__ . '/../..' . '/core/Facades/Translate.php',
        'STS\\core\\Helpers\\FormHelper' => __DIR__ . '/../..' . '/core/Helpers/FormHelper.php',
        'STS\\core\\Helpers\\url_helper' => __DIR__ . '/../..' . '/core/Helpers/url_helper.php',
        'STS\\core\\Hooks\\HookManager' => __DIR__ . '/../..' . '/core/Hooks/HookManager.php',
        'STS\\core\\Hooks\\hooks' => __DIR__ . '/../..' . '/core/Hooks/hooks.php',
        'STS\\core\\Http\\HttpKernel' => __DIR__ . '/../..' . '/core/Http/HttpKernel.php',
        'STS\\core\\Http\\Request' => __DIR__ . '/../..' . '/core/Http/Request.php',
        'STS\\core\\Http\\Response' => __DIR__ . '/../..' . '/core/Http/Response.php',
        'STS\\core\\Middleware\\MiddlewareManager' => __DIR__ . '/../..' . '/core/Middleware/MiddlewareManager.php',
        'STS\\core\\Modules\\Module' => __DIR__ . '/../..' . '/core/Modules/Module.php',
        'STS\\core\\Modules\\ModuleManager' => __DIR__ . '/../..' . '/core/Modules/ModuleManager.php',
        'STS\\core\\Modules\\PermissionManager' => __DIR__ . '/../..' . '/core/Modules/PermissionManager.php',
        'STS\\core\\Plugins\\Plugin' => __DIR__ . '/../..' . '/core/Plugins/Plugin.php',
        'STS\\core\\Plugins\\PluginManager' => __DIR__ . '/../..' . '/core/Plugins/PluginManager.php',
        'STS\\core\\PriorityQueue' => __DIR__ . '/../..' . '/core/PriorityQueue.php',
        'STS\\core\\Providers\\App\\AppServiceProvider' => __DIR__ . '/../..' . '/core/Providers/App/AppServiceProvider.php',
        'STS\\core\\Providers\\ServiceProvider' => __DIR__ . '/../..' . '/core/Providers/ServiceProvider.php',
        'STS\\core\\Routing\\Route' => __DIR__ . '/../..' . '/core/Routing/Route.php',
        'STS\\core\\Routing\\Router' => __DIR__ . '/../..' . '/core/Routing/Router.php',
        'STS\\core\\Security\\Hash' => __DIR__ . '/../..' . '/core/Security/Hash.php',
        'STS\\core\\Security\\Validator' => __DIR__ . '/../..' . '/core/Security/Validator.php',
        'STS\\core\\Session\\CustomSessionHandler' => __DIR__ . '/../..' . '/core/Session/CustomSessionHandler.php',
        'STS\\core\\Session\\FlashMessage' => __DIR__ . '/../..' . '/core/Session/FlashMessage.php',
        'STS\\core\\Session\\SessionException' => __DIR__ . '/../..' . '/core/Session/SessionException.php',
        'STS\\core\\Session\\SessionManager' => __DIR__ . '/../..' . '/core/Session/SessionManager.php',
        'STS\\core\\Themes\\GlobalVariables' => __DIR__ . '/../..' . '/core/Themes/GlobalVariables.php',
        'STS\\core\\Themes\\ThemeManager' => __DIR__ . '/../..' . '/core/Themes/ThemeManager.php',
        'STS\\core\\Translation\\Translation' => __DIR__ . '/../..' . '/core/Translation/Translation.php',
        'STS\\core\\Validation\\Validator' => __DIR__ . '/../..' . '/core/Validation/Validator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93aac646e888c9f092cf694ccde7a667::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93aac646e888c9f092cf694ccde7a667::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93aac646e888c9f092cf694ccde7a667::$classMap;

        }, null, ClassLoader::class);
    }
}
