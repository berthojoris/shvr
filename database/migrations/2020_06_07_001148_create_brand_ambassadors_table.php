<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandAmbassadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_ambassadors', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('instagram')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->string('address');
            $table->integer('province');
            $table->integer('city');
            $table->string('postal_code');
            $table->string('job');
            $table->string('question_1');
            $table->enum('question_2', ['Ya', 'Tidak']);
            $table->enum('question_3', ['Ya', 'Tidak']);
            $table->enum('question_4', ['Ya', 'Tidak']);
            $table->enum('question_5', [
                'Ya saya tahu dan menggunakan produk GG SHVR', 
                'Ya saya tahu tapi tidak menggunakan produk GG SHVR',
                'Saya tidak tahu dan tidak menggunakan produk GG SHVR',
            ]);
            $table->enum('question_6', [
                '1 Kali', 
                '2 Kali',
                '3 Kali',
                'Lebih dari 3 kali'
            ]);
            $table->text('question_7');
            $table->text('question_8');
            $table->text('question_9');
            $table->text('question_10');
            $table->text('question_11');
            $table->text('question_12');
            $table->text('question_13');
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
        Schema::dropIfExists('brand_ambassadors');
    }
}
