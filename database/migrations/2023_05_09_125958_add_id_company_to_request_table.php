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
    Schema::table('request', function (Blueprint $table) {
        $table->unsignedBigInteger('id_company')->nullable()->after('id_internship_supervisor');
        $table->foreign('id_company')->references('id_company')->on('company');
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::table('request', function (Blueprint $table) {
        $table->dropForeign(['id_company']);
        $table->dropColumn('id_company');
    });
}
};
