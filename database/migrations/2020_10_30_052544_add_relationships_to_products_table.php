<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->Integer('category_id')->change()->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
            $table->dropForeign('products_category_id_foreing');
        });
        Schema::table('products',function(Blueprint $table){
            $table->dropIndex('products_category_id_foreing');
        });
        Schema::table('products', function(Blueprint $table){
            $table->integer('category_id')->change();
        });
    }
}
