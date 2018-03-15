<?php

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
        $conn = mysqli_connect("thuctapphp.com", "root", "1", "thuctapPHP");
    
        $sql = "SELECT * from student";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        if($result){
            return mysqli_fetch_assoc($result);
            // var_dump(1, mysqli_fetch_assoc($result));
            // die;
        }
    }
    
}
// $test = new studentModel();
// $test->getStudent();
