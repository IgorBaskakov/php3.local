<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513944944_createNewTable
    extends Migration
{

    public function up()
    {
        $this->db->execute('
            CREATE TABLE news (
              id SERIAL PRIMARY KEY,
              title VARCHAR(255),
              lead TEXT,
              published DATETIME
            );
        ');
    }

    public function down()
    {
        $this->db->execute('
            DROP TABLE news;
        ');
    }
    
}