<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513949751_createUsersTable
    extends Migration
{

    public function up()
    {
        $this->db->execute('
            CREATE TABLE users (
              id SERIAL PRIMARY KEY,
              name VARCHAR(100),
              role_id INT
            );
            
            INSERT INTO users (name)
             VALUES ("Баскаков Игорь");
        ');
    }

    public function down()
    {
        $this->db->execute('
            DROP TABLE users;
        ');
    }
    
}