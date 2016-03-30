<?php
Class CV extends GeneralSeeder
{
    public $table = 'CV';
    public $data = array(
        array(
            'MaNTV' => 4,
            'MaNganh' => 1,
            'MaCV' => 1,
            'TenCV' => 'Tìm việc lập trình hệ thống',
            'MaTrinhDo' => 4,
            'MaKinhNghiem' => 2,
            'MaHinhThuc' => 1,
            'MaTinh' => 56,
            'MoTa' => 'Kỹ năng lập trình tốt'
        ),
        array(
            'MaNTV' => 5,
            'MaNganh' => 3,
            'MaCV' => 2,
            'TenCV' => 'Tìm việc làm thêm',
            'MaTrinhDo' => 3,
            'MaKinhNghiem' => 1,
            'MaHinhThuc' => 2,
            'MaTinh' => 54,
            'MoTa' => 'Chăm chỉ'
        )
    );
}