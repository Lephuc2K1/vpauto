<?php

define("DOMAIN_NAME","https://localhost/vpauto/");
define("PATH_CONTROLLER",__DIR__."/controller/");
define("PATH_MODELS",__DIR__."/models/");
define("PATH_VIEWS",__DIR__."/views/");
define("PATH_CORE",__DIR__."/core/");

require("core/app.php");
// file để request các file ( trung gian)
require_once("core/controller.php");

// file kết nối sqli
require_once("core/DBcurd.php");

$app = new App();




