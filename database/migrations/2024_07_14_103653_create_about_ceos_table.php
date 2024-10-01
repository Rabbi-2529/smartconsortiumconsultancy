<?php

// database/migrations/xxxx_xx_xx_create_about_ceos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutCeosTable extends Migration
{
    public function up()
    {
        Schema::create('about_ceos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about_ceos');
    }
}
