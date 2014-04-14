<?php
define('PHPUnit_MAIN_METHOD', 'PHPUnit_TextUI_Command::main');
$loader = require __DIR__ . '/../vendor/autoload.php';

PHPUnit_TextUI_Command::main();
