<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'notification_create',
            ],
            [
                'id'    => 18,
                'title' => 'notification_edit',
            ],
            [
                'id'    => 19,
                'title' => 'notification_show',
            ],
            [
                'id'    => 20,
                'title' => 'notification_delete',
            ],
            [
                'id'    => 21,
                'title' => 'notification_access',
            ],
            [
                'id'    => 22,
                'title' => 'member_create',
            ],
            [
                'id'    => 23,
                'title' => 'member_edit',
            ],
            [
                'id'    => 24,
                'title' => 'member_show',
            ],
            [
                'id'    => 25,
                'title' => 'member_delete',
            ],
            [
                'id'    => 26,
                'title' => 'member_access',
            ],
            [
                'id'    => 27,
                'title' => 'institution_create',
            ],
            [
                'id'    => 28,
                'title' => 'institution_edit',
            ],
            [
                'id'    => 29,
                'title' => 'institution_show',
            ],
            [
                'id'    => 30,
                'title' => 'institution_delete',
            ],
            [
                'id'    => 31,
                'title' => 'institution_access',
            ],
            [
                'id'    => 32,
                'title' => 'district_create',
            ],
            [
                'id'    => 33,
                'title' => 'district_edit',
            ],
            [
                'id'    => 34,
                'title' => 'district_show',
            ],
            [
                'id'    => 35,
                'title' => 'district_delete',
            ],
            [
                'id'    => 36,
                'title' => 'district_access',
            ],
            [
                'id'    => 37,
                'title' => 'state_create',
            ],
            [
                'id'    => 38,
                'title' => 'state_edit',
            ],
            [
                'id'    => 39,
                'title' => 'state_show',
            ],
            [
                'id'    => 40,
                'title' => 'state_delete',
            ],
            [
                'id'    => 41,
                'title' => 'state_access',
            ],
            [
                'id'    => 42,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
