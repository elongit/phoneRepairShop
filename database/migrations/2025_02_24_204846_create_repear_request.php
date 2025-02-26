<?php

use App\Models\ServiceType;
use App\Models\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->text('issue_description');
            
            // Foreign keys with cascading deletes
            $table->foreignId('phone_type_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(ServiceType::class)->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('appointment_id')->nullable()->constrained()->onDelete('set null'); 
            $table->foreignId('status_id')->nullable()->constrained('statuses')->onDelete('set null'); 
            $table->foreignId('technicien_id')->nullable()->constrained('techniciens')->onDelete('set null'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_repair_requests');
    }
};
