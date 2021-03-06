<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug', 100)->after('title');
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
        });
    }
}
