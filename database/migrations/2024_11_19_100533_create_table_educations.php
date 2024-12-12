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
        Schema::create('educations', function (Blueprint $table) {
            $table->id('education_id');
			$table->String('EducationInstitute');
			$table->String('AcademicalDegree');
			$table->Date('DateEnrolled');
			$table->Date('DateFinished')->nullable();
			$table->String('Major');
			$table->Decimal('GPA' ,3,2)->nullable();
			$table->ForeignId('cv_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_educations');
    }
};
