<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('community_name');
            $table->integer('community_city');
            $table->string('instagram')->unique();
            $table->string('youtube')->nullable();
            $table->string('soundcloud_mixcloud')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('community_created');
            $table->string('member_1');
            $table->string('member_2')->nullable();
            $table->string('member_3')->nullable();
            $table->string('member_4')->nullable();
            $table->string('member_5')->nullable();
            $table->string('question_1');
            $table->enum('question_2', ['Ya', 'Tidak']);
            $table->enum('question_3', [
                '1 Kali', 
                'Kurang dari 1 kali',
                'Lebih dari 1 kali'
            ]);
            $table->enum('question_4', [
                'Ya saya tahu dan menggunakan produk GG SHVR', 
                'Ya saya tahu tapi tidak menggunakan produk GG SHVR',
                'Saya tidak tahu dan tidak menggunakan produk GG SHVR',
            ]);
            $table->text('question_5');
            $table->text('question_6');
            $table->text('question_7');
            $table->text('question_8');
            $table->text('question_9');
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
        Schema::dropIfExists('communities');
    }
}
