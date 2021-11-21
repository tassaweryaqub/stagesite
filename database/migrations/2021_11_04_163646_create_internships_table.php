<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()
            ->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreignId('practicalteacher_id')->constrained('practicalteachers')
            ->onUpdate('cascade')->onDelete('cascade'); 
            $table->foreignId('student_id')->constrained('students')
            ->onUpdate('cascade')->onDelete('cascade'); 

            $table->date('begindate');  
            $table->date('enddate');  
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
        Schema::dropIfExists('internships');
    }
}
