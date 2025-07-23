<?php

use Velto\Core\Migration\Migration;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        $this->createTable('activities', function ($table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('activities');
    }
}