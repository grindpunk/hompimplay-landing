<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_park', function (Blueprint $table) {
            $table->id('id_park');
            $table->string('park_name', 50);
            $table->text('article_title');
            $table->text('article_desc');
            $table->text('park_thumb')->nullable();
            $table->text('park_img')->nullable();
            $table->string('park_category', 50);
            $table->string('park_code', 50)->unique();
            $table->integer('status_park')->default(1);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_park');
    }
};
