<?php

use Velto\Core\Migration\Migration;

class CreateBookmarksTable extends Migration
{
    public function up()
    {
        $this->createTable('bookmarks', function ($table) {
            $table->id();
            $table->integer('userId');
            $table->string('threadId');
            $table->timestamps();
            $table->unique(['userId', 'threadId']);
        });
    }

    public function down()
    {
        $this->dropTable('bookmarks');
    }
}