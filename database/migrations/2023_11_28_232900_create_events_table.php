<?php

use App\Models\Association;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->date('date_limite_inscription');
            $table->text('description');
            $table->string('image');
            $table->boolean('est_cloture')->default(false);
            $table->date('date_evenement');
            $table->foreignIdFor(Association::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
