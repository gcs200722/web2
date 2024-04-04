<?php

// database/migrations/YYYY_MM_DD_create_contributions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionsTable extends Migration
{
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->date('submission_date');
            $table->date('approval_date')->nullable();
            $table->string('image_path')->nullable();
            $table->string('word_file_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contributions');
    }
}
