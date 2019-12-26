<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . "/third_party/LogView/vendor/autoload.php";

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use GuzzleHttp\Psr7\Request;

use DebugBar\DebugBar;
use DebugBar\OpenHandler;
use DebugBar\Storage\FileStorage;
use DebugBar\StandardDebugBar;


class Log extends MY_Controller
{


}
