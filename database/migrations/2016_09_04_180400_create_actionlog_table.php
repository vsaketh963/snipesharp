<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('action_type');
            $table->integer('target_id')->nullable();  // Was checkedout_to
            $table->integer('target_type')->nullable(); // For polymorphic thingies
            $table->integer('location_id')->nullable();
            $table->text('note')->nullable();
            $table->text('filename')->nullable();
            $table->string('item_type');
            $table->integer('item_id');  // Replaces asset_id, accessory_id, etc.
            $table->date('expected_checkin')->nullable()->default(null);
            $table->integer('accepted_id');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('thread_id')
                ->nullable()
                ->default(null);
            $table->index('thread_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('action_logs');
    }
}
