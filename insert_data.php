<?php
include('dbconn.php');


    if(isset($_POST['add_friends'])){
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $age = $_POST['age'];

        if($fname == "" || empty($fname)){
            header('location:index.php?message=You forgot to enter the first name!');
        }
       elseif($lname == "" || empty($lname)){
            header('location:index.php?message=You forgot to enter the last name!');
        }
        elseif($age == "" || empty($age)){
            header('location:index.php?message=You forgot to enter the age!');
        }
        else{
            $query = "INSERT INTO `students` (`first_name`,`last_name`,`age`) VALUES('$fname','$lname','$age')";
            $result = mysqli_query($connection,$query);

            if(!$result){
                die("Query Failed".mysqli_error($connection));
            }
            else{
                header('location:index.php?insert_msg=Data has been added successfully');
            }
        }

    }
?>