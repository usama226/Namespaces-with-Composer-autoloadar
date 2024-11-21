<?php
namespace Src\View;

use Src\Models\Post;

class Blade
{
    public static function list()
    {
        $posts = Post::getAll();

        echo "<h1>All Posts</h1>";
        echo "<table border='1'>";


        foreach ($posts as $post) {
            echo "<tr>
        <td>" . $post['id'] . "</td>
        <td>" . $post['title'] . "</td>
        <td>" . $post['description'] . "</td>
        <td>" . $post['user_id'] . "</td>
        <td>" . date('d M, Y', strtotime($post['created_at'])) . "</td>
    </tr>";
        }

        echo "</table>";

        // $DB = new DB();
        // DB::close(); 
    }
}
