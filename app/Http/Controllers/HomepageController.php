<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    //
    function index(){

    	return view('homepage');
    }
    function viewNTD($id){
        $index = strrpos($id,'-');
        $id = substr($id,$index+1,strlen($id));
        $companies = DB::table('HoSoNTD')
            ->where('MaNTD',$id)
            ->get();
        $links = array();
        $alias = new Alias();
        foreach($companies  as $company){
            array_push($links,$alias->convert_vi_to_en($company->TenNTD));
        }
        return view('viewwork/detailcompany')->with('companies',$companies );
    }



    /**
     * Đăng nhập
     * Kiểm tra tài khoản, nếu tài khoản chính xác thì chuyển sang trang loginfinish
     * Còn không hiển thị tài khoản không chính xác đăng nhập lại
     */

}
