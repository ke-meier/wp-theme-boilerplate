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
    public static function setVersion($version)
    {
        self::$version = $version;
    }
}
