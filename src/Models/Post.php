<?php

namespace Src\Models;

use Src\Database\DB;

class Post
{
    public static function getAll()
    {
        // $DB = new DB();
        $connection = DB::connect();
        $query = 'SELECT * FROM posts ORDER BY created_at DESC';
        $result = $connection->query($query);

        $posts = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }

        return $posts;
    }
}
