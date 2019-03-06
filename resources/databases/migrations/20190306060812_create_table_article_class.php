<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableArticleClass extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('article_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classname',20)->nullable();
            $table->dateTime('time');
            $table->string('itro')->nullable();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('article_class');
    }
}
