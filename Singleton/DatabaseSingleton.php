<?php

namespace Singleton;

/**
 * Implementaчуo da classe de conexуo com o padrуo "Singleton"
 *
 * Class DatabaseSingleton
 * @package Singleton
 */
class DatabaseSingleton
{
    /** @var DatabaseSingleton $instance Instтncia do banco da dados. */
    protected static $instance;

    /**
     * DatabaseSingleton constructor.
     */
    private function __construct()
    {

    }

    /**
     * Magic method clone.
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * Magic method wakeup.
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * DatabaseSingleton constructor.
     * @param $dsn
     * @param $username
     * @param $password
     * @param $options
     */
    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new \PDO(
                'mysql:dbname=api;host=127.0.0.1',
                'root',
                '123123'
            );
        }

        return self::$instance;
    }
}