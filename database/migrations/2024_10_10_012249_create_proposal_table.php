<?php

use App\Models\projects;
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

        Schema::create("proposals", function (Blueprint $table) {

        $table->id();

        $table->string('email');

        $table->unsignedSmallInteger('hours');

        $table->foreignId('project_id')->constrained('projects');

         $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        {
            Schema::dropIfExists('proposals');
        }
    }
};
