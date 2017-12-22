<?php

namespace App\Migrations;

use App\Models\User;
use T4\Orm\Migration;

class m_1513951960_deleteUsersTable
    extends Migration
{

    public function up()
    {
        // вариант 1 - просто переименуем таблицу
//        $this->db->execute('
//            RENAME TABLE users TO backup_users;
//        ');

        // вариант 2 - сохраняем все данные в файл
        $users = User::findAll();
        mkdir(ROOT_PATH_PROTECTED . '/database_backups');

        file_put_contents(ROOT_PATH_PROTECTED . '/database_backups/backup_users.txt', serialize($users) );

        $this->db->execute('
            DROP TABLE users;
        ');
    }

    public function down()
    {
        // вариант 1 - возвращаем прежнее имя таблицы
//        $this->db->execute('
//            RENAME TABLE backup_users TO users;
//        ');

        // вариант 2 - создаем таблицу, и заполняем ее данными из файла-бэкапа
        $this->db->execute('
            CREATE TABLE users (
              id SERIAL PRIMARY KEY,
              name VARCHAR(100),
              role_id INT
            );
        ');

        $data = file_get_contents(ROOT_PATH_PROTECTED . '/database_backups/backup_users.txt');
        $users = unserialize($data);

        foreach($users as $user) {
            (new User())->fill($user)->save();
        }
    }
    
}