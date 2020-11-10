<?php

namespace ThemeApp;

final class Registry
{
    /**
     * @var string
     */
    private static $version = '0';

    /**
     * @var array
     */
    private static $config = [];

    /**
     * @var string
     */
    private static $baseUrl = '';

    /**
     * @var string
     */
    private static $basePath = '';

    private function __construct()
    {
        // private constructor
    }

    private function __clone()
    {
        // private clone
    }

    /**
     * @return array
     */
    public static function getConfig(): array
    {
        return self::$config;
    }

    /**
     * @param array $config
     */
    public static function setConfig($config)
    {
        self::$config = $config;
    }

    /**
     * @return string
     */
    public static function getVersion(): string
    {
        return self::$version;
    }

    /**
     * @param string $version
     */
    public static function setVersion(string $version)
    {
        self::$version = $version;
    }

    /**
     * @return string
     */
    public static function getBaseUrl(): string
    {
        return self::$baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public static function setBaseUrl(string $baseUrl)
    {
        self::$baseUrl = $baseUrl;
    }

    /**
     * @return string
     */
    public static function getBasePath(): string
    {
        return self::$basePath;
    }

    /**
     * @param string $basePath
     */
    public static function setBasePath(string $basePath)
    {
        self::$basePath = $basePath;
    }
}
