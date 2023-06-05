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
        Schema::create('project_masters', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned()->nullable();
            $table->string('name', 100)->nullable();
            $table->string('icon', 200)->nullable();
            $table->string('server_key', 250)->nullable();
            $table->string('firebase_url', 250)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->mediumInteger('created_by')->unsigned()->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->mediumInteger('updated_by')->unsigned()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_masters');
    }
};
