<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('project_value')->nullable();
            $table->integer('client_id')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status', ['pending', 'on progress', 'testing', 'finished'])->nullable()->default('on progress');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
