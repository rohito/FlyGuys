<?php
$db_user = "k1553451";
$db_name = "db_k1553451";
$db_password = "poo";


$pdo = new
 PDO("mysql:host=kunet.kingston.ac.uk;dbname=$db_name",
$db_user,$db_password);



session_start();
require_once "../Controller/dataAccess-db.php";


$password = $_POST['password'];

if(isset($_POST['dataName'])){
    $dataName = $_POST['dataName'];
    $_SESSION['dataName'] = $dataName;
    $username = $_POST['username'];
    //echo ($password);
}

/*
//assign variable which holds the username field in the respective database
if($dataName == "KUTalent"){
    $dbUsername = "KuNumber";
}else if( $dataName == "Student"){
    $dbUsername = "KNumber";
}else if ( $dataName == "Employer"){
    $dbUsername = "Username";
}
*/


//check for insertion
$username = htmlentities($username);
$password = htmlentities($password);

$sql = "SELECT * FROM Administrator WHERE Name ='$username' && Password='$password' ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
if (sizeof($result) == 1) {
//    if(password_verify($_POST['password'], $result[0]['Password'])){
//        $sql = "UPDATE ".$dataName." SET last_login = NOW() WHERE ".$dbUsername."='$username';";
//        $stmt = $pdo->prepare($sql);
//        $stmt->execute();
//        if ($stmt->execute() === TRUE) {
//            echo "Record updated successfully";
//        } else {
//            echo "Error updating record: " . $stmt->error;
//        }

        //echo (($result[0]['Password']));
        //echo "Success";
        $_SESSION['username'] = $username;
        $_SESSION['failed'] = false;
        //setUserType($dataName);
        header("Location: ../Admin/Home.php");

}
else{
  header("Location: ../index.php");
}
/*    else{
         echo "failed";
        $_SESSION['failed'] = true;
        $_SESSION['errorMessage'] = "<h2 style='color:red;'>Log in failed, have you entered your details correctly?</h2>";
        header("Location: ../index.php");
    }
}
else{
        echo "failed";
        $_SESSION['failed'] = true;
        $_SESSION['errorMessage'] = "<h2 style='color:red;'>Log in failed, have you entered your details correctly?</h2>";
        header("Location: ../index.php");
    }

/*
function setUserType($databaseName){
    if($databaseName == "Student"){
        $_SESSION['usertype'] = 1;
    } else if($databaseName == "KUTalent"){
        $_SESSION['usertype'] = 2;
    }else if($databaseName == "Employer"){
        $_SESSION['usertype'] = 3;
    }
}
*/

?>
