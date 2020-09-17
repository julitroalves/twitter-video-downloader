<?php

require_once __DIR__ . './../vendor/autoload.php';

use \TwitterVideoDownloader\Downloader;

$downloader = new Downloader();

var_dump($downloader->download("https://twitter.com/maiconkusterk/status/1306577178293940224"));