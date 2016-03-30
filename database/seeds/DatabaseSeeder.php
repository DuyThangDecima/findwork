<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public  $myChild = array('Viec_NTV','CV','Viec','HoSoNTV','HoSoNTD','KinhNghiem','MucLuong','TrinhDo','HinhThuc','Tinh','Nganh','TaiKhoan');
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        foreach ($this->myChild as $childTable)
            if (isset($childTable))
                DB::table($childTable)->delete();
        $this->call(TaiKhoan::class);
        $this->call(Nganh::class);
        $this->call(Tinh::class);
        $this->call(HinhThuc::class);
        $this->call(TrinhDo::class);
        $this->call(MucLuong::class);
        $this->call(KinhNghiem::class);
        $this->call(HoSoNTD::class);
        $this->call(HoSoNTV::class);
        $this->call(Viec::class);
        $this->call(CV::class);
        $this->call(Viec_NTV::class);
    }
}
