<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompotitionUserUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compotition_user_uploads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');	
            $table->longText('compotition_images');
            $table->longText('compotition_videos');
            $table->longText('compotition_details');
            $table->enum('level', ['submitted', 'published','rejected']);
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
        Schema::dropIfExists('compotition_user_uploads');
    }
}
