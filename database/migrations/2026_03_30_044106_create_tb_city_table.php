<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_city', function (Blueprint $table) {
            $table->id('id_city');
            $table->string('city_name', 50);
            $table->text('article_title');
            $table->text('article_desc');
            $table->text('city_thumb')->nullable();
            $table->text('city_img')->nullable();
            $table->string('city_category', 50);
            $table->string('city_code', 50)->unique();
            $table->integer('status_city')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_city');
    }
};
