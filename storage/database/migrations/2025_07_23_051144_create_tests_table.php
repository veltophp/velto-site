<?php

use Velto\Core\Migration\Migration;

class CreateTestsTable extends Migration
{
    public function up()
    {
        $this->createTable('tests', function ($table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('tests');
    }
}