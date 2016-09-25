<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopadminAdminAndModeratorRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert some stuff
        DB::table('roles')->insert(
            array(
                array(
                    'name' => 'Top Admin',
                    'slug' => 'top_admin',
                    'level' => 1,
                    'created_at' => date("Y-m-d H:i:s")
                ),
                array(
                    'name' => 'Admin',
                    'slug' => 'admin',
                    'level' => 2,
                    'created_at' => date("Y-m-d H:i:s")
                ),
                array(
                    'name' => 'Moderator',
                    'slug' => 'moderator',
                    'level' => 3,
                    'created_at' => date("Y-m-d H:i:s")
                )
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('roles')->where('name', 'Top Admin')->delete();
        DB::table('roles')->where('name', 'Admin')->delete();
        DB::table('roles')->where('name', 'Moderator')->delete();
    }
}
