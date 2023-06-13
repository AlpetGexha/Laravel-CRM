<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('interaction_stored_events', function (Blueprint $table) {
            $table->id();
            $table->uuid('aggregate_uuid')->nullable()->index()->unique();
            $table->unsignedBigInteger('aggregate_version')->nullable()->unique();
            $table->integer('event_version')->default(1);
            $table->string('event_class')->index();
            $table->json('event_properties');
            $table->json('meta_data');
            $table->timestamp('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('interaction_stored_events');
    }
};
