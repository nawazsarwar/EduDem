<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMembersTable extends Migration
{
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id', 'district_fk_9923233')->references('id')->on('districts');
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id', 'state_fk_9933967')->references('id')->on('states');
            $table->unsignedBigInteger('home_state_id')->nullable();
            $table->foreign('home_state_id', 'home_state_fk_9933968')->references('id')->on('states');
            $table->unsignedBigInteger('institution_id')->nullable();
            $table->foreign('institution_id', 'institution_fk_9923232')->references('id')->on('institutions');
        });
    }
}
