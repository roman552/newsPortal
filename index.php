<?php
session_start();
include_once 'inc/Database.php';
require 'model/Category.php';
require 'model/News.php';

include_once 'view/news.php';

include_once 'controller/Controller.php';
include_once 'route/Routing.php';

echo $response;
?>