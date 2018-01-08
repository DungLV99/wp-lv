<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use \Illuminate\Container\Container as Container;
use \Illuminate\Support\Facades\Facade as Facade;
/**
 * Setup a new app instance container
 *
 * @var Illuminate\Container\Container
 */
$app = new Container();
$app->singleton('app', 'Illuminate\Container\Container');

/**
 * Set $app as FacadeApplication handler
 */
Facade::setFacadeApplication($app);
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    private static  $instance;
    public static function int(){
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    protected function __construct()
    {
        parent::__construct();
            add_action("wp_ajax_test", [$this, "ajaxHandler"]);
            add_action("wp_ajax_nopriv_test", [$this, "ajaxHandler"]);
    }
    public function index() {
        return view('welcome');
    }
    public function ajaxTest()
    {
      $data = DB::table('wp_users');
      dd($data);
    }
}
