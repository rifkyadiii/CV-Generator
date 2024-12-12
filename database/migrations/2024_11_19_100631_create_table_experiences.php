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
        Schema::create('experiences', function (Blueprint $table) {
		    $table->id('experience_id');
		    $table->ForeignId('cv_id');
			$table->String('JobRole');
			$table->String('Company');
			$table->Date('DateEnrolled');
			$table->Date('DateFinished')->nullable();
			$table->text('Description');
			
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_experiences');
    }
};
