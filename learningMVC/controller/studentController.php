<?php 

include './../model/student.php';
class studentController{
    function listStudent(){
        $m_student = new studentModel();
        $name=$m_student->getStudent();
        return $name;
    }
}
?>