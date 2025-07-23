<?php

use Velto\Core\Migration\Migration;

class CreateDocssTable extends Migration
{
    public function up()
    {
        $this->createTable('docss', function ($table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('docss');
    }
}