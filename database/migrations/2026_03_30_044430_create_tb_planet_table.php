<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_planet', function (Blueprint $table) {
            $table->id('id_planet');
            $table->string('planet_name', 50);
            $table->text('article_title');
            $table->text('article_desc');
            $table->text('planet_thumb')->nullable();
            $table->text('planet_img')->nullable();
            $table->string('planet_category', 50);
            $table->string('planet_code', 50)->unique();
            $table->integer('status_planet')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_planet');
    }
};
