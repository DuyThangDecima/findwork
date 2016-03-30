<?php
Class HoSoNTV extends GeneralSeeder
{
    public $table = 'HoSoNTV';
    public $data = array(
        array(
            'MaNTV' => 4,
            'TenNTV' => 'Nguyễn Văn A',
            'NgaySinh' => '1994/08/20',
            'DiaChi' => 'Đống Đa - Hà Nội',
            'DienThoai' => 123456789,
            'GioiTinh' => 1,
            'Email' => 'ANV@example.mail'
        ),
        array(
            'MaNTV' => 5,
            'TenNTV' => 'Trần Thị B',
            'NgaySinh' => '1969/04/14',
            'DiaChi' => 'Liên Chiểu - TP. Hồ Chí Minh',
            'DienThoai' => 987654321,
            'GioiTinh' => 0,
            'Email' => 'BTT@example.com'
        )
    );
}