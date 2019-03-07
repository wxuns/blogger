<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableKeyword extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('keyword', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->boolean('status')->default();
            $table->text('article_id')->nullable()->comment('文章id ,隔开');
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('keyword');
    }
}
