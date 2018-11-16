<?php

namespace components;

use logger\LoggerInterface;

class Logger
{

    private $enabled = true;
    private $logger = null;
    private static $instance = null;


    private function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance($logger = null)
    {
        if (null === self::$instance) {
            self::$instance = new self($logger);
        }
        return self::$instance;
    }

    public function enable()
    {
        $this->enabled = true;
    }

    public function disable()
    {
        $this->enabled = false;
    }

    public function log(string $message)
    {
        if ($this->enabled) {
            $this->logger->log($message);
        }
    }

    public function getState()
    {
        return $this->enabled;
    }

}
