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
        Schema::create('fcmtoken_masters', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->mediumInteger('project_master_id')->unsigned()->nullable();
            $table->string('fcm_token', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fcmtoken_masters');
    }
};
