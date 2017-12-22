<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513950629_createRolesTable
    extends Migration
{

    public function up()
    {
        $this->db->execute('
            CREATE TABLE roles (
              id SERIAL PRIMARY KEY,
              name VARCHAR(100)
            );
            
            INSERT INTO roles (name)
              VALUES ("Админ");
              
            INSERT INTO roles (name)
              VALUES ("Пользователь");
            
            UPDATE users
              SET role_id = 1
              WHERE id = 1;
        ');
    }

    public function down()
    {
        $this->db->execute('
            DROP TABLE roles;
        ');
    }
    
}