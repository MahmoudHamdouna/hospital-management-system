<?php

namespace Database\Seeders;

use App\Models\RayEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RayEmployeeTableSeerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ray_employee = new RayEmployee();
        $ray_employee->name = 'محمد السيد';
        $ray_employee->email = 'm@yahoo.com';
        $ray_employee->password = Hash::make('123456789');
        $ray_employee->save();
    }
}
