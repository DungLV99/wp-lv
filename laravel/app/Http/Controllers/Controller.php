<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function __construct()
    {

        add_action("wp_ajax_rvn_test", [$this, "ajaxHandler"]);
        add_action("wp_ajax_nopriv_test", [$this, "ajaxHandler"]);

    }
    public function isAjax()
    {
        if ( ! defined('DOING_AJAX') || ! DOING_AJAX) {
            return false;
        } else {
            return true;
        }
    }
    public function ajaxHandler()
    {
        // view docs http://labs.omniti.com/labs/jsend
        if ($this->isAjax()) {
            $result = [
                'status'  => 'error',
                'message' => 'Đã xảy ra lỗi, vui lòng thử lại'
            ];
            if (!empty($_REQUEST["method"])) {
                $method = $_REQUEST["method"];
                if (method_exists($this, "ajax" . $method)) {
                    $result2 = call_user_func([$this, "ajax" . $method], $_POST);
                    if (!empty($result2)) {
                        $result = $result2;
                    }
                }
            }

            echo json_encode($result);
            exit;
        }
    }
}
