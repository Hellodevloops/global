<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Same as 'title' column in 'posts' table
            $table->string('hero')->nullable(); // Same as 'hero' column in 'posts' table
            $table->string('description')->nullable(); // Same as 'description' column in 'posts' table
            $table->string('type')->nullable(); // Same as 'type' column in 'posts' table
            $table->text('body')->nullable(); // Same as 'body' column in 'posts' table
            $table->bigInteger('author'); // Same as 'author' column in 'posts' table
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
        Schema::dropIfExists('countries');
    }
}
