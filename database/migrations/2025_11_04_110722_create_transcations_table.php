<?php

use App\Models\Building;
use App\Models\Customer;
use App\Models\Ledger;
use App\Models\Unit;
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
        Schema::create('transcations', function (Blueprint $table) {
            $table->id();
            $table->date('contractdate')->nullable();
            $table->string('name');
            $table->foreignIdFor(Unit::class)->constrained();
            $table->string('reference')->nullable();
            $table->foreignIdFor(Ledger::class)->constrained();
            $table->foreignId('agent_id')->constrained('ledgers');
            $table->integer('leasemonths')->nullable();
            $table->integer('freemonths')->nullable();
            $table->date('startdate')->nullable();
            $table->date('expdate')->nullable();
            $table->date('enddate')->nullable();
            $table->integer('rentpermonthamt')->nullable();
            $table->integer('totalrentamt')->nullable();
            $table->integer('depositamt')->nullable();
            $table->integer('bankcharge')->nullable();
            $table->integer('installment')->nullable();
            $table->boolean('salespost')->nullable();
            $table->boolean('receiptpost')->nullable();
            $table->integer('refundrentamt')->nullable();
            $table->integer('refunddepositamt')->nullable();
            $table->string('ptype')->nullable();
            $table->date('paydate')->nullable();
            $table->string('pmode')->nullable();
            $table->string('pymtcollectedby')->nullable();
            $table->string('Pymtdocnumber')->nullable();
            $table->json('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transcations');
    }
};
