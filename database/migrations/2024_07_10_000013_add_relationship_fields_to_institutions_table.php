<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToInstitutionsTable extends Migration
{
    public function up()
    {
        Schema::table('institutions', function (Blueprint $table) {
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id', 'district_fk_9923226')->references('id')->on('districts');
        });
    }
}
