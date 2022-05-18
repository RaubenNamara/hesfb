<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" type="text/css" href="/styling/aboutus.css">

</head>

<body>
    <div class="description">
        <h1>About us</h1>
        <p>Robs-tech has developed Class Attendance Management System that allows heads of different faculties to easily take students attendance </p>
        <p>Students can login and view their attendance </p>
        <p>Administrators can login, sign up, enroll students, edit student data and generte attendance report for each student</p>
    </div>
</body>
<?php
        echo "My Name is Namara Rauben";
        $myfile = fread("myfile.csv","a+");
        fwrite($mywrite,"Firstname,Secondname,Gender,Course,Height \n");
        fwrite($myfile,"Namara,Rauben,Male,Bse,12 \n");
        fwrite($myfile,"Elasu,joseph,male,Bs,09 \n");
        $statement = "finished executing";
        echo $statement;
        
?>


</html>
