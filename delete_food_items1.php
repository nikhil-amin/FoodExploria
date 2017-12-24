<?php




include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}




$cheks = implode("','", $_POST['checkbox']);
$sql = "DELETE FROM FOOD WHERE F_ID in ('$cheks')";
$result = mysqli_query($conn,$sql) or die(mysqli_error());

header('Location: delete_food_items.php');
$conn->close();


?>