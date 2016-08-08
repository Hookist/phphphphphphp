<?php

/**
 * Created by PhpStorm.
 * User: student
 * Date: 08.08.2016
 * Time: 11:01
 */
class Connector
{
    function __construct()
    {
        $this->mysqli = new mysqli("127.0.0.1", "root", "", "Blog");

    }
    public function doQuery($query)
    {
        $link = mysqli_connect("127.0.0.1","root", "", "Blog");
        $result = $this->mysqli->query($query);
        return $result;
    }
}