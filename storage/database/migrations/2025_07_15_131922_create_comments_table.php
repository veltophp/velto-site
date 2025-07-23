<?php

use Velto\Core\Migration\Migration;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        $this->createTable('comments', function ($table) {
            $table->id(); 
            $table->string('commentId');
            $table->text('comment');
            $table->string('userId'); 
            $table->string('threadId');
            $table->enum('status', ['visible', 'hidden'])->default('visible');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        $this->dropTable('comments');
    }
}