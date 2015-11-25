<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intact";

$conn = new mysqli($servername,$username,$password,$dbname);

$name = $_POST['name'];
$email = $_POST['inputEmail'];
$mobile = $_POST['mobile'];
$vehicleno = $_POST['vehicleno'];
$service = $_POST['service'];
$other = $_POST['other'];

$sql = "INSERT INTO online_order (CName,Email,Mobile,Vehicle_No,Service_Type,Other) VALUE ('$name','$email','$mobile','$vehicleno','$service','$other')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>