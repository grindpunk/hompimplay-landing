<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_jungle', function (Blueprint $table) {
            $table->id('id_jungle');
            $table->string('jungle_name', 50);
            $table->text('article_title');
            $table->text('article_desc');
            $table->text('jungle_thumb')->nullable();
            $table->text('jungle_img')->nullable();
            $table->string('jungle_category', 50);
            $table->string('jungle_code', 50)->unique();
            $table->integer('status_jungle')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_jungle');
    }
};
