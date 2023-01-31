<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_permissions', function (Blueprint $table) {
            $table->id();
            
            $table->date('date');
            $table->string('subject');
            $table->text('description');
            $table->date('replied_at')->nullable();
            $table->boolean('is_accepted')->nullable();
            $table->foreignId('permission_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_permissions');
    }
};
