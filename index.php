<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include('Student.php');
         $students = array();
           
$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_status('status','Freshman');
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->add_grade(65);
$first->add_grade(75);
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->add_status('status','Sophomore');
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$a3 = new Student();
$a3->surname = "Cai";
$a3->first_name = "RongJie";
$a3->add_status('status','Sophomore');
$a3->add_email('work','RongJie@bcit.com');
$a3->add_grade(100);
$a3->add_grade(100);
$a3->add_grade(100);
$students['r123'] = $a3;
        foreach($students as $student)
        echo $student->toString();
        ?>
       
    </body>
</html>
