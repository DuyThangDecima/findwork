<?php
Class TaiKhoan extends GeneralSeeder{
        public  $table = 'TaiKhoan';
        public $data = array(
            array(
                'Username' => 'QuanTri',
                'Password' => 'QuanTri',
                'Quyen' => 0,
                'MaTaiKhoan' => 1,
            ),
            array(
                'Username' => 'TuyenDung1',
                'Password' => 'TuyenDung1',
                'Quyen' => 1,
                'MaTaiKhoan' => 2,
            ),
            array(
                'Username' => 'TuyenDung2',
                'Password' => 'TuyenDung2',
                'Quyen' => 1,
                'MaTaiKhoan' => 3,
            ),
            array(
                'Username' => 'TimViec1',
                'Password' => 'TimViec1',
                'Quyen' => 2,
                'MaTaiKhoan' => 4,
            ),
            array(
                'Username' => 'TimViec2',
                'Password' => 'TimViec2',
                'Quyen' => 2,
                'MaTaiKhoan' => 5,
            )
        );
}