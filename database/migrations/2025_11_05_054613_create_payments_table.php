<?php

use App\Models\Transcation;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('paymenttype')->nullable();
            $table->string('referencenum')->nullable();
            $table->string('bankname')->nullable();
            $table->date('depositdate')->nullable();
            $table->longText('note')->nullable();
            $table->string('paymentmode')->nullable();
            $table->integer('amount')->nullable();
            $table->string('attachment')->nullable();
            $table->foreignIdFor(Transcation::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
