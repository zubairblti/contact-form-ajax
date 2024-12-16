<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $education = $_POST['education'];
    $profession = $_POST['profession'];
    $hobbies = $_POST['hobbies'];

    $response = "<p><span>Name: </span>$name</p>";
    $response .= "<p><span>Email: </span>$email</p>";
    $response .= "<p><span>Phone: </span>$phone</p>";
    $response .= "<p><span>Date of Birth: </span>$dob</p>";
    $response .= "<p><span>Gender: </span>$gender</p>";
    $response .= "<p><span>Country: </span>$country</p>";
    $response .= "<p><span>Address: </span>$address</p>";
    $response .= "<p><span>Education: </span>$education</p>";
    $response .= "<p><span>Profession: </span>$profession</p>";
    $response .= "<p><span>Hobbies: </span>$hobbies</p>";

    echo $response;
}

?>