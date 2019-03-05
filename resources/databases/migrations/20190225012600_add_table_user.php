<?php

use Illuminate\Database\Schema\Blueprint;
use Polite\Migration\Migration;

class AddTableUser extends Migration
{
    /**
     * Do the migration.
     */
    public function up()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',13);
            $table->string('password')->nullable();
            $table->string('mobile',11);
            $table->string('email');
            $table->string('nick');
            $table->string('pic');
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Undo the migration.
     */
    public function down()
    {
        Schema::drop('users');
    }
}
