<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer("code")->unique();
            $table->enum("status", ["draft", "trash", "published"]);
            $table->timestamp("imported_t")->useCurrent();
            $table->string("url");
            $table->string("creator");
            $table->integer("created_t");
            $table->integer("last_modified_t");
            $table->string("product_name");
            $table->string("quantity");
            $table->string("brands");
            $table->string("categories");
            $table->string("labels");
            $table->string("cities");
            $table->string("purchase_places");
            $table->string("stores");
            $table->text("ingredients_text");
            $table->text("traces");
            $table->string("serving_size");
            $table->float("serving_quantity");
            $table->integer("nutriscore_score");
            $table->char("nutriscore_grade", 1);
            $table->string("main_category");
            $table->string("image_url");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};