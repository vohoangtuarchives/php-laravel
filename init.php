<?php
const ROOT = __DIR__ . DIRECTORY_SEPARATOR;
const FRAMEWORK = ROOT . "framework" . DIRECTORY_SEPARATOR;

const FRAMEWORK_DIR = ROOT . "vendor/laravel/laravel/";

const TUEZY = ROOT . "src" . DIRECTORY_SEPARATOR;

const BOOTSTRAP_PATH = FRAMEWORK . "laravel/bootstrap";
const CONFIG_PATH = FRAMEWORK . "laravel/config";
const STORAGE_PATH = FRAMEWORK . "laravel/storage";

const PUBLIC_PATH = ROOT . "public";
const MODULES = ROOT . "Modules" . DIRECTORY_SEPARATOR;
const MODULE_CONFIG_PATH = MODULES . "configs.php";

require ROOT . "vendor/autoload.php";
require ROOT . "autoload.php";



define('LARAVEL_START', microtime(true));

$_ENV['APP_BASE_PATH'] = FRAMEWORK_DIR;

$app = require_once FRAMEWORK . '/laravel/bootstrap/app.php';

$app->useEnvironmentPath(ROOT);
$app->useStoragePath(FRAMEWORK . "laravel/storage");
$app->useDatabasePath(FRAMEWORK . "laravel/database");

$app->register(\Tuezy\ServiceProviders\RoutesProvider::class);
$app->register(\Tuezy\ServiceProviders\ModuleProvider::class);

return $app;