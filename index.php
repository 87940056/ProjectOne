<?php
define ('VIEW','App/views/');
define ('CONTROLLER','App/controller/');
define ('MODEL','App/model/');

define('CSS_PATH','/Static/css');
define('IMG_PATH','/Static/img');
define('JS_PATH','../../static/js');
define('FONT_PATH','../../static/font');

require 'Core/frameWork.php';
require 'Core/dbPdo.php';
\Core\frameWork::start();