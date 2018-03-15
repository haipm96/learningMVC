<?php 
echo "string";
include("/model/student.php");
class studentController{
    function listStudent(){
        $m_student=new studentModel();
        $name=$m_student->getStudent();
        //return array('name'=>$name['studentName']);
        echo $name;
    }
}
?>