<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    private $roles = [
        [
            'id' => 1,
            'guard_name' => 'users',
            'name' => 'admin'
        ],
        [
            'id' => 2,
            'guard_name' => 'users',
            'name' => 'head'
        ],
        [
            'id' => 3,
            'guard_name' => 'users',
            'name' => 'staff'
        ],
        [
            'id' => 4,
            'guard_name' => 'users',
            'name' => 'guest'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        app()['cache']->forget('spatie.permission.cache');
        $roles = $this->roles;
        foreach ($roles as $key => $data) {
            Role::create($data);
        }
    }
}
