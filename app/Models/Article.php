<?php
/**
 * Article Model
 */

namespace App\Models;

class Article
{
    public static function first()
    {
        $connection = mysqli_connect("localhost", "root", "admin");
        if (!$connection) {
            die('Could not connect'.mysql_error());
        }

        mysqli_set_charset($connection, "UTF8");

        mysqli_select_db($connection, "mffc");

        $result = mysqli_query($connection, "SELECT * FROM articles limit 1");

        if ($row = mysqli_fetch_array($result)) {
            return $row;
        }

        mysqli_close($connection);
    }
}