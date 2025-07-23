<?php

use Velto\Core\Migration\Migration;

class CreateCommunitiesTable extends Migration
{
    public function up()
    {
        $this->createTable('communities', function ($table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('communities');
    }
}