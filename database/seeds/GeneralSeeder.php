<?php
/**
 * Created by PhpStorm.
 * User: Lys
 * Date: 3/21/2016
 * Time: 9:47 PM
 */
class GeneralSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        if (!isset($this->table))
            return;
        DB::table($this->table)->delete();
        foreach ($this->data as $data)
        {
            if (isset($data))
            {
                try
                {
                    DB::table($this->table)->insert($data);
                }
                catch(\Illuminate\Database\QueryException $exc)
                {

                }
            }
        }
    }

}