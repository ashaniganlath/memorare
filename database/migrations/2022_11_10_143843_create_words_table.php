<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string('word')->unique();
            $table->longText('meaning');
            $table->longText('example')->nullable();
            $table->date('created_date');
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->index('word');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('words', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropIndex(['word']);
        });

        Schema::dropIfExists('words');
    }
};
