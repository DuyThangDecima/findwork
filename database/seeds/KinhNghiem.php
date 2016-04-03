<?php
Class KinhNghiem extends GeneralSeeder
{
    public $table = 'KinhNghiem';
    public $data = array(
        array(
            'MaKinhNghiem' => 1,
            'SoNam' => -1, //Chưa có kinh nghiệm
        ),
        array(
            'MaKinhNghiem' => 2,
            'SoNam' => 0, //Dưới 1 năm
        ),
        array(
            'MaKinhNghiem' => 3,
            'SoNam' => 1,//1 năm
        ),
        array(
            'MaKinhNghiem' => 4,
            'SoNam' => 2,//2 năm
        ),
        array(
            'MaKinhNghiem' => 5,
            'SoNam' => 3,//3 năm
        ),

        array(
            'MaKinhNghiem' => 6,
            'SoNam' => 4,//4 năm
        ),
        array(
            'MaKinhNghiem' => 7,
            'SoNam' => 5,//5 năm
        ),
        array(
            'MaKinhNghiem' => 7,
            'SoNam' => 6,//Trên 5 năm
        )
    );
}