<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'fullname' => 'Trần Tuấn Ngọc',
            'phone' => '0975853528',
            'email' => 'trantuanngoctn97@gmail.com',
            'password' => '123456',
            'type' => 'superadmin',
            'actived' => true
        ]);

        factory(Admin::class, 30)->create();
    }
}
