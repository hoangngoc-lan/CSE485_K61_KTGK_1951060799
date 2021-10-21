<?php


 $patientid= $_POST['patientid'];
   $firstname = $_POST['firstname'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
     $mobile = $_POST['mobile'];
      $email = $_POST['email'];
       $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood_type = $_POST['blood_type'];
        $created_on = $_POST['created_on'];
        $modified_on = $_POST['modified_on'];
    // kết nối sql
$conn=mysqli_connect('localhost','root','','patient');
                if(!$conn){
        die("Không thể kết nối");
                             }

    // Bước 02:
    $sql = "INSERT INTO patient(patientid,firstname, lastname, dateofbirth,  gender,mobile,email,height,weight,blood_type,created_on,modified_on)
    VALUES ('$patientid','$firstname','$lastname','$dateofbirth', '$gender','$mobile','$email','$height','$weight','$blood_type','$created_on','$modified_on')";

    echo $sql;
    $result = mysqli_query($conn,$sql);
  
    // Bước 03:
    if($result > 0){
        header("Location:chitiet.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>