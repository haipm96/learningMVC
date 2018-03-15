<?php
require 'config.php';
/**
* 
*/
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
      $sql=mysqli_query($conn,"SELECT * FROM student ");
      $count = mysqli_num_rows($sql);
      
        return mysqli_fetch_assoc($sql);
        
    }
    // $stu = new studentModel();
    // $stu->getStudent();
}
?>
