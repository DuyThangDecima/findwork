<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    //Lấy thông tin việc hot, việc mới trả về homepage
    public function goHomePage()
    {
        $new_works = $this->getNewWork();

        $linkWorks = array();
        $linkCompanies = array();
        $alias = new Alias();
        foreach ($new_works as $new_work) {
            array_push($linkCompanies, $alias->convert_vi_to_en($new_work->TenNTD ."-" .$new_work->MaNTD));
            array_push($linkWorks, $alias->convert_vi_to_en($new_work->TenViec  ."-" .$new_work->MaViec));
        }
        return view('homepage')->with('new_works', $new_works)->with('linkCompanies', $linkCompanies)->with('linkWorks', $linkWorks);
    }

    //Lấy việc trong thời gian 24h gần nhất
    public function getNewWork()
    {
        //Thực hiện query dữ liệu trả về những việc trong vòng 24h gần nhất
        //Nếu không đủ 10 kết quả thì phải lấy thêm cho đủ kết quả
        $new_works = DB::table('Viec')
            ->join('HoSoNTD', 'HoSoNTD.MaNTD', '=', 'Viec.MaNTD')
            ->get();
        return $new_works;
    }
}
