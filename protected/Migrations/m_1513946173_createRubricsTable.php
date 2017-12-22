<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513946173_createRubricsTable
    extends Migration
{

    public function up()
    {
        $this->createTable('rubrics', [
            'name' => ['type' => 'string']
        ], [],
        ['tree']);
    }

    public function down()
    {
        $this->dropTable('rubrics');
    }
    
}