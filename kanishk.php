


<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['message'])) {
    $message = $_POST['message'];
}
if (isset($_POST['allow'])) {
    $allow = $_POST['allow'];
}

if (isset($_POST['postname'])) {
    $postname = $_POST['postname'];
}


$conn=new mysqli('localhost','id13072042_kushagra','123@Kushagra','id13072042_covid');
if($conn->connect_error)
{
    die('Connection failed : ' . $conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into aftercovid(name,email,message,allow,postname)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $message, $allow, $postname);
    $stmt->execute();
    echo "Thanks for your valuable time...";
    $stmt->close();
    $conn->close();
}
?>
