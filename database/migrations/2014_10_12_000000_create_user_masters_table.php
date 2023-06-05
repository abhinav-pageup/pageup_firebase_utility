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
        Schema::create('user_masters', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->enum('role', ['Admin', 'Maintainer'])->default('Maintainer');
            $table->rememberToken();
            $table->dateTime('created_at')->nullable();
            $table->smallInteger('created_by')->unsigned()->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->smallInteger('updated_by')->unsigned()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_masters');
    }
};
