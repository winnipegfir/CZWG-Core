<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SecureToRolesTableB extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
    Schema::table('roles', function (Blueprint $table) {
$table->integer('secure');
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('roles');
}
}
