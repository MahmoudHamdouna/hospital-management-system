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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->decimal('Total_before_discount',8,2); // الاجمالي قبل الخصم  1000
            $table->decimal('discount_value',8,2); // فيمة الخصم 300
            $table->decimal('Total_after_discount',8,2); // الاجمالي بعد الخصم 700
            $table->string('tax_rate'); // ضريبة القيمة المضافة  %15
            $table->decimal('Total_with_tax',8,2); //  الاجمالي شامل الضريبة  %15 *700    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
