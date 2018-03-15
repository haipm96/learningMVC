<?php
include ('./../config.php');
class studentModel
{
    function addStudent()
    {

    }
    function editStudent()
    {

    }
    function deleteStudent()
    {

    }
    function getStudent()
    {
        //$conn = mysqli_connect("thuctapphp.com", "root", "1", "thuctapPHP");
        $sql = "SELECT * from student";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}

