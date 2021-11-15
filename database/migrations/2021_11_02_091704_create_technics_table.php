<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_11_02_091704_create_technics_table.php
class CreateTechnicsTable extends Migration
=======
class CreatePracticalteachersTable extends Migration
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2:database/migrations/2021_11_01_135942_create_practicalteachers_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_11_02_091704_create_technics_table.php
        Schema::create('technics', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30); 
=======
        Schema::create('practicalteachers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45); 
            $table->mediumText('description', 15); 
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2:database/migrations/2021_11_01_135942_create_practicalteachers_table.php
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
<<<<<<< HEAD:database/migrations/2021_11_02_091704_create_technics_table.php
        Schema::dropIfExists('technics');
=======
        Schema::dropIfExists('practicalteachers');
>>>>>>> 2fec473016d1be0d88fc80518408d8a3b0496bc2:database/migrations/2021_11_01_135942_create_practicalteachers_table.php
    }
}
