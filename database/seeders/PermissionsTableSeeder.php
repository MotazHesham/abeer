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
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'slider_create',
            ],
            [
                'id'    => 20,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 21,
                'title' => 'slider_show',
            ],
            [
                'id'    => 22,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 23,
                'title' => 'slider_access',
            ],
            [
                'id'    => 24,
                'title' => 'service_create',
            ],
            [
                'id'    => 25,
                'title' => 'service_edit',
            ],
            [
                'id'    => 26,
                'title' => 'service_show',
            ],
            [
                'id'    => 27,
                'title' => 'service_delete',
            ],
            [
                'id'    => 28,
                'title' => 'service_access',
            ],
            [
                'id'    => 29,
                'title' => 'qualification_create',
            ],
            [
                'id'    => 30,
                'title' => 'qualification_edit',
            ],
            [
                'id'    => 31,
                'title' => 'qualification_show',
            ],
            [
                'id'    => 32,
                'title' => 'qualification_delete',
            ],
            [
                'id'    => 33,
                'title' => 'qualification_access',
            ],
            [
                'id'    => 34,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 35,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 36,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 37,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 38,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 39,
                'title' => 'gallery_managment_access',
            ],
            [
                'id'    => 40,
                'title' => 'gallery_category_create',
            ],
            [
                'id'    => 41,
                'title' => 'gallery_category_edit',
            ],
            [
                'id'    => 42,
                'title' => 'gallery_category_show',
            ],
            [
                'id'    => 43,
                'title' => 'gallery_category_delete',
            ],
            [
                'id'    => 44,
                'title' => 'gallery_category_access',
            ],
            [
                'id'    => 45,
                'title' => 'blog_create',
            ],
            [
                'id'    => 46,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 47,
                'title' => 'blog_show',
            ],
            [
                'id'    => 48,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 49,
                'title' => 'blog_access',
            ],
            [
                'id'    => 50,
                'title' => 'contactu_create',
            ],
            [
                'id'    => 51,
                'title' => 'contactu_edit',
            ],
            [
                'id'    => 52,
                'title' => 'contactu_show',
            ],
            [
                'id'    => 53,
                'title' => 'contactu_delete',
            ],
            [
                'id'    => 54,
                'title' => 'contactu_access',
            ],
            [
                'id'    => 55,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 56,
                'title' => 'setting_access',
            ],
            [
                'id'    => 57,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
