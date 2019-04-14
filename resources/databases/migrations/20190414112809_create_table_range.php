<?php

use \Polite\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTableRange extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $this->schema->create('range', function (Blueprint $table) {
            $table->comment = '权限范围';
            $table->increments('id');
            $table->string('index',10)->comment('后台接收时换为id');
            $table->string('label',10);
            $table->string('path',10);
            $table->string('icon',10);
            $table->string('name',10);
            $table->integer('parent_id')->unsigned()->default(0);
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $this->schema->drop('range');
    }
}
