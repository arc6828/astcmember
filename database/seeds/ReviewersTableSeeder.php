<?php

use Illuminate\Database\Seeder;

class ReviewersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CHANGE THIS LINE ONLY
        $path = 'database/seeds/sql/reviewers.sql';
        // =============================================================
        // file Path -> Project/app/configs/database.php
        // get the database name, database username, database password
        // =============================================================
        $db     = \Config::get('database.connections.mysql.database');
        $user   = \Config::get('database.connections.mysql.username');
        $pass   = \Config::get('database.connections.mysql.password');

        // running command line import in php code
        //mysql -u username -p password database_name < file.sql
        exec("mysql -u {$user} -p {$db} < {$path}");
    }
}
