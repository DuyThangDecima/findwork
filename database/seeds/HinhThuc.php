<?php
Class HinhThuc extends GeneralSeeder
{
    public $table = 'HinhThuc';
    public $data = array(
        array(
            'MaHinhThuc' => 1,
            'TenHinhThuc' => 'Nhân viên chính thức'
        ),
        array(
            'MaHinhThuc' => 2,
            'TenHinhThuc' => 'Nhân viên thời vụ'
        ),
        array(
            'MaHinhThuc' => 3,
            'TenHinhThuc' => 'Bán thời gian'
        ),
        array(
            'MaHinhThuc' => 4,
            'TenHinhThuc' => 'Làm thêm ngoài giờ'
        ),
        array(
            'MaHinhThuc' => 5,
            'TenHinhThuc' => 'Thực tập và dự án'
        )
    );
}