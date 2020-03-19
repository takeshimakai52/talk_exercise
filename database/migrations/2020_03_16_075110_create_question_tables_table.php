<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_path')->nullable()->default(NULL);
            $table->string('title');
            $table->string('question');
            $table->string('answer_good');
            $table->string('answer_normal');
            $table->string('answer_bad');
            $table->string('re_answer_good');
            $table->string('re_answer_normal');
            $table->string('re_answer_bad');
            $table->string('advice_good');
            $table->string('advice_normal');
            $table->string('advice_bad');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            

            // $table->integer('category_id')->unsigned();
            // $table->integer('region_id')->unsigned();
            // $table->boolean('delete_flg')->default(0);
            // $table->timestamp('created_at')->useCurrent();
            // $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('question_tables');
    }
}
