<?php

use Velto\Core\Migration\Migration;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        $this->createTable('threads', function ($table) {
            $table->id();
            $table->string('threadId');
            $table->string('userId');
            $table->string('category');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('threads');
    }
}