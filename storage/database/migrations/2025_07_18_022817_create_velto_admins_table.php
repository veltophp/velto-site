<?php

use Velto\Core\Migration\Migration;

class CreateVeltoAdminsTable extends Migration
{
    public function up()
    {
        $this->createTable('velto_admins', function ($table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->dropTable('velto_admins');
    }
}