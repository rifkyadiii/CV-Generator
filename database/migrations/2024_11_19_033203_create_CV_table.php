<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
	 apa saja yang bisa diperluas dari sebuah resume atau cv?
	 **pendidikan
	 **pengalaman
	 **projek
	 **sertifikasi
	 **kontak
     */
    public function up(): void
    {
        Schema::create('CV', function (Blueprint $table) {
            $table->id('cv_id');
			$table->ForeignId('user_id');
			$table->String('Firstname');
			$table->String('Lastname');
			$table->String('Birthdate');
			$table->String('Description');
			$table->String('photo')->nullable();
			$table->String('PhoneNumber')->nullable();
			$table->String('WorkEmail')->nullable();
			$table->String('Address');
			$table->String('Title');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
