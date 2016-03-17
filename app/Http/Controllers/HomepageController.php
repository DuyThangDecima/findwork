<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    //
    function index(){
    	return view('homepage');
    }

    /**
     * Đăng nhập
     * Kiểm tra tài khoản, nếu tài khoản chính xác thì chuyển sang trang loginfinish
     * Còn không hiển thị tài khoản không chính xác đăng nhập lại
     */

}
