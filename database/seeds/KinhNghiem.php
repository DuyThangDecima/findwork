<?php
Class KinhNghiem extends GeneralSeeder
{
    public $table = 'KinhNghiem';
    public $data = array(
        array(
            'MaKinhNghiem' => 1,
            'MucDuoi' => 0,
            'MucTren' => 1
        ),
        array(
            'MaKinhNghiem' => 2,
            'MucDuoi' => 1,
            'MucTren' => 3
        ),
        array(
            'MaKinhNghiem' => 3,
            'MucDuoi' => 3,
            'MucTren' => 5
        ),
        array(
            'MaKinhNghiem' => 4,
            'MucDuoi' => 5,
            'MucTren' => 100
        )
    );
}