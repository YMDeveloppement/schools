<?php
include_once '../Classes/user.php';
//

$user = new User();

//
if (isset($_POST['login'])) {
    $result = $user->check_login($_POST['email'], $_POST['password']);
    echo 'result==> '.json_decode($result)->error;
    if ($result) {
        header("location:../Dashbord.php");
    } else {
        echo 'Nooo ERROR';
    }
}

if (isset($_POST['SignIn'])) {
    if ($_POST["name"] && $_POST["surname"] && $_POST["email"] && $_POST["passw"]) {
        // echo $_POST["name"] . " , " . $_POST["surname"] . " , " . $_POST["email"] . " , " . $_POST["passw"] . " , " . $_POST["confirmPw"] . "<br>";
        $pattern = "/[A-Z]?[A-Za-z]+[.0-9]+[A-Za-z]+[0-9]*@[gmail|yahoo|mail]?[a-z]*.[com|fr|ma|co]+/";

        if (preg_match_all($pattern, $_POST["email"], $matches)) {
            if ($_POST["confirmPw"] !== $_POST["passw"]) {
                $error = "Error in Confirmation of Password";
                header('Location: /schools/login.php' . (!empty($error) ? '?error=' . $error : ''));
                exit;
            }
            $user->fields["name"] = $_POST["name"];
            $user->fields["surname"] = $_POST["surname"];
            $user->fields["mail"] = $_POST["email"];
            $user->fields["password"] = password_hash($_POST["passw"], PASSWORD_DEFAULT);
            if($user->add_user()){
                echo 'Home page';   
            }
            else{
                echo "<br> back <br>";
            }
            // $status=json_decode($user->add_user());
            // echo gettype($status);
            // if(property_exists($status,"confirmation")){
            //     echo $status->confirmation;
            // }
            // else{
            //     echo $status->error;

            // }
        } else {
            $error = "Error in Email structure";
            header('Location: /schools/login.php' . (!empty($error) ? '?error=' . $error : ''));
            exit;
        }
    }
} 
else {
    echo "yassine sout";
}

?>