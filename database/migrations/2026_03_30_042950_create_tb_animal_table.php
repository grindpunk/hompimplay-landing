<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_animal', function (Blueprint $table) {
            $table->id('id_animal');
            $table->string('animal_name', 50);
            $table->text('article_title');
            $table->text('article_desc');
            $table->text('animal_thumb')->nullable();
            $table->text('animal_img')->nullable();
            $table->string('animal_category', 50);
            $table->string('animal_code', 50)->unique();
            $table->text('info_brief')->nullable();
            $table->text('info_fact')->nullable();
            $table->text('info_name_ina')->nullable();
            $table->text('info_name_eng')->nullable();
            $table->text('info_name_lat')->nullable();
            $table->text('info_origin')->nullable();
            $table->text('info_habitat')->nullable();
            $table->text('info_ordo')->nullable();
            $table->text('info_fam')->nullable();
            $table->text('info_food')->nullable();
            $table->integer('status_animal')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_animal');
    }
};
