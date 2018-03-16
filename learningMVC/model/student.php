<?php
// include './../config/config.php';
class studentModel
{
    
    // function connectDB()
    // {
    //     $conn = mysqli_connect("thuctapphp.com", "root", "1", "thuctapPHP");
    //     return $conn;
    // }
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
        
        $conn = mysqli_connect("thuctapphp.com", "root", "1", "thuctapPHP");
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}

