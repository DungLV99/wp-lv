<?php
/**
  * Template Name: laravel
 */
use App\Http\Controllers\PageController;
$controller = PageController::int();
echo ($controller->index());