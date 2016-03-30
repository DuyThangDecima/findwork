<?php
Class HinhThuc extends GeneralSeeder
{
    public $table = 'HinhThuc';
    public $data = array(
        array(
            'MaHinhThuc' => 1,
            'TenHinhThuc' => 'Full time'
        ),
        array(
            'MaHinhThuc' => 2,
            'TenHinhThuc' => 'Làm theo ca'
        ),
        array(
            'MaHinhThuc' => 3,
            'TenHinhThuc' => 'Làm theo giờ'
        ),
        array(
            'MaHinhThuc' => 4,
            'TenHinhThuc' => 'Thực tập sinh'
        )
    );
}