<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('booth_name')->nullable();
            $table->string('booth_no')->nullable();
            $table->string('assembly_constituency')->nullable();
            $table->string('name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('gender')->nullable();
            $table->string('disability')->nullable();
            $table->string('disability_type')->nullable();
            $table->string('religion')->nullable();
            $table->longText('address')->nullable();
            $table->string('department')->nullable();
            $table->string('subject')->nullable();
            $table->string('designation')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
