<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->increments('id');
						$table->integer('promotion_id')->nullable()->default(NULL);
						$table->text('name');
						$table->text('street')->nullable()->default(NULL);
						$table->text('city')->nullable()->default(NULL);
						$table->text('state')->nullable()->default(NULL);
						$table->text('zip')->nullable()->default(NULL);
						$table->text('phone')->nullable()->default(NULL);
						$table->text('website')->nullable()->default(NULL);
						$table->text('facebook')->nullable()->default(NULL);
						$table->text('twitter')->nullable()->default(NULL);
						$table->text('logo')->nullable()->default(NULL);
						$table->text('image1')->nullable()->default(NULL);
						$table->text('image2')->nullable()->default(NULL);
						$table->text('image3')->nullable()->default(NULL);
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
        Schema::dropIfExists('dealers');
    }
}
