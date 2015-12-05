<?php

class DB
{
    var $connection;

    function __construct ()
    {
        $this->connection = new mysqli('localhost', 'root',
                                       'greatunihack', 'AchievementDatabase');

        if ($db->connect_errno > 0)
            die('Unable to connect to database[' . $db->connect_error . ']');
    }

    public static function getUsers ($name)
    {



        return mysqli_query($db, "SELECT name FROM Users");
    }

    function __destruct ()
    {
        $db->close();
    }
}

?>