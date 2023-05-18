<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('head_of_department', function (Blueprint $table) {
            $table->string('name_department')->after('last_name_head_of_department');
        });
    }

    public function down()
    {
        Schema::table('head_of_department', function (Blueprint $table) {
            $table->dropColumn('name_department');
        });
    }
};
