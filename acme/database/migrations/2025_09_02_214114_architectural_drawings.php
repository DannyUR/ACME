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
        schema::create('architectural_drawings', function(Blueprint $table){
            $table -> id();
            $table -> string('name');
            $table -> text('description');
            $table -> string('darwing_file');
            $table -> foreignId('project_id') -> constrained('projects');
            $table -> integer('version');                                               
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema:: dropIfExistis('architectural_drawings');
    }
};
