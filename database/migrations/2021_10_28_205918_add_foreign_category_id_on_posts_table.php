<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignCategoryIdOnPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //# definizione della colonna 
            // $table->unsignedBigInteger('category_id')->after('id')->nullable();

            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('set_null');
            $table->foreignId('category_id')->after('id')->nullable()->onDelete('set null')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            
            //eliminare il vincolo
            $table->dropForeign('posts_category_id_foreign');

            //elimina la colonna 
            $table->dropColumn('category_id');
        });
    }
}
