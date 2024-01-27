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
        //
        Schema::create('announcement', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->longText('content');
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->notNull();
            $table->string('image_path');
            $table->unsignedBigInteger('user_id')->notNull();
            $table->unsignedBigInteger('company_id')->notNull();

            $table->timestamps();

            // ? Foreign keys :
            $table->foreign('user_id')
                ->references('id')
                ->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('company_id')
                ->references('id')
                ->on('company')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('announcement');
    }
};
