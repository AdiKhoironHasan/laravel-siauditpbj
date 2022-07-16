<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rencana_id')->unique()->constrained()->cascadeOnDelete();
            $table->foreignId('kerja_desk_id')->unique()->nullable()->onDelete('set null');
            $table->foreignId('desk_id')->unique()->nullable()->onDelete('set null');
            $table->foreignId('visit_id')->unique()->nullable()->onDelete('set null');
            $table->foreignId('berita_id')->unique()->nullable()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timelines');
    }
}
