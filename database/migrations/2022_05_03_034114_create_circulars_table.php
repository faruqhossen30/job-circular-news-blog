<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circulars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('content');
            $table->string('thumbnail')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            // Organization Info
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('organization_website')->nullable();
            $table->string('apply_link')->nullable();
            $table->string('vacancy')->nullable();
            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_tag')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('circulars');
    }
};
