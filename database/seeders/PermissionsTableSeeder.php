<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'view_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'view_any_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'create_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'update_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'restore_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'restore_any_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'replicate_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'reorder_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'delete_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delete_any_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'force_delete_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'force_delete_any_client',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'view_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'view_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'create_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'update_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'restore_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'restore_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'replicate_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'reorder_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'delete_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'delete_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'force_delete_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'force_delete_any_company',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'view_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'view_any_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'create_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'update_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'restore_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'restore_any_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'replicate_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'reorder_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'delete_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'delete_any_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'force_delete_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'force_delete_any_contact',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'view_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'view_any_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'create_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'update_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'restore_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'restore_any_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'replicate_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'reorder_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'delete_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'delete_any_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'force_delete_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'force_delete_any_contact::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'view_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'view_any_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'create_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'update_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'restore_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'restore_any_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'replicate_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'reorder_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'delete_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'delete_any_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'force_delete_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'force_delete_any_department',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:00',
                'updated_at' => '2023-06-16 00:14:00',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'view_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'view_any_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'create_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'update_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'restore_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'restore_any_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'replicate_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'reorder_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'delete_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'delete_any_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'force_delete_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'force_delete_any_interaction',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'view_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'view_any_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'create_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'update_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'restore_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'restore_any_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'replicate_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'reorder_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'delete_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'delete_any_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'force_delete_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'force_delete_any_interaction::stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'view_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'view_any_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'create_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'update_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'restore_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'restore_any_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'replicate_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'reorder_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'delete_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'delete_any_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'force_delete_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'force_delete_any_job::title',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'view_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'view_any_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'create_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'update_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'restore_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'restore_any_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'replicate_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'reorder_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'delete_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'delete_any_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'force_delete_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'force_delete_any_project',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'view_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'view_any_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'create_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'update_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'delete_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'delete_any_role',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'view_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'view_any_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'create_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'update_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'restore_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'restore_any_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'replicate_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'reorder_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'delete_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'delete_any_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'force_delete_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'force_delete_any_stored::event',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'view_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'view_any_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'create_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'update_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'restore_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'restore_any_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'replicate_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'reorder_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'delete_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'delete_any_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'force_delete_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'force_delete_any_team',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:01',
                'updated_at' => '2023-06-16 00:14:01',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'view_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'view_any_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'create_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'update_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'restore_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'restore_any_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'replicate_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'reorder_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'delete_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'delete_any_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'force_delete_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'force_delete_any_tenant',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'view_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'view_any_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'create_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'update_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'restore_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'restore_any_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'replicate_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'reorder_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'delete_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'force_delete_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'force_delete_any_user',
                'guard_name' => 'web',
                'created_at' => '2023-06-16 00:14:02',
                'updated_at' => '2023-06-16 00:14:02',
            ),
        ));
        
        
    }
}