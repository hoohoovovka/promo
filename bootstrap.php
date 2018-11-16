<?php

$fileLogger = new \logger\FileLogger(LOG_PATH);
$logger = \components\Logger::getInstance($fileLogger);

ENABLE_LOGGING ? $logger->enable() : $logger->disable();