<?php
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(dirname(__DIR__));
    $env['env'] = $dotenv->load();

    function env($key, $default) {
        return !empty($_ENV[$key]) ? $_ENV[$key] : $default;
    }

    foreach (scandir(dirname(__DIR__) . '/config') as $filename) {
        $path = dirname(__DIR__) . '/config/' . $filename;
        if (is_file($path)) {
            require_once $path;
        }
    }

    return $config = array_merge($config, $auth, $database, $environment, $env);