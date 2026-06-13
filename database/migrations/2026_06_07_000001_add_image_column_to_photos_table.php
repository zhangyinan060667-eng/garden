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
        if (Schema::hasTable('photos') && !Schema::hasColumn('photos', 'image')) {
            Schema::table('photos', function (Blueprint $table) {
                $table->string('image')->after('type');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('photos') && Schema::hasColumn('photos', 'image')) {
            Schema::table('photos', function (Blueprint $table) {
                $table->dropColumn('image');
            });
        }
    }
};
