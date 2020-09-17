<?php

require_once __DIR__ . './../vendor/autoload.php';

use \TwitterVideoDownloader\Downloader;

$downloader = new Downloader();

var_dump($downloader->download("https://twitter.com/i/status/1306552753636941824"));