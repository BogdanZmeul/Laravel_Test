<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//creation: php artisan make:migration edit_column_content_to_posts_table --table=posts
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //$table->renameColumn('content', 'post_content');
            //$table->string('post_content')->change();
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
            //$table->renameColumn('post_content', 'content');
            //$table->text('post_content')->change();
        });
    }
};
