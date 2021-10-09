<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenamePublishColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Posts', function (Blueprint $table) {
            $table->renameColumn('is_published', 'was_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Posts', function (Blueprint $table) {
            $table->renameColumn('is_published', 'was_published');
        });
    }
}
