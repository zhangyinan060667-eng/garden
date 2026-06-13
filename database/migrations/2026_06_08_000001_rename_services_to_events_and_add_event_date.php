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
        if (Schema::hasTable('services') && ! Schema::hasTable('events')) {
            Schema::rename('services', 'events');
        }

        if (Schema::hasTable('events') && ! Schema::hasColumn('events', 'event_date')) {
            Schema::table('events', function (Blueprint $table) {
                $table->date('event_date')->nullable()->after('details');
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
        if (Schema::hasTable('events') && Schema::hasColumn('events', 'event_date')) {
            Schema::table('events', function (Blueprint $table) {
                $table->dropColumn('event_date');
            });
        }

        if (Schema::hasTable('events') && ! Schema::hasTable('services')) {
            Schema::rename('events', 'services');
        }
    }
};
