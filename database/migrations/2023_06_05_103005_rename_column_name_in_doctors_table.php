<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->renameColumn('first_name', 'firstName');
            $table->renameColumn('middle_name','name');
            $table->renameColumn('last_name','lastName');
            $table->renameColumn('hospital_id','hospitalId');
            $table->renameColumn('is_doctor', 'isDoctor');
            $table->renameColumn('last_update', 'lastUpdate');

        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            //
        });
    }
};
