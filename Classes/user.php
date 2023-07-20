<?php
include_once '../config/Connect.php';
session_start();
class User
{
    public $fields = array(
        "id" => "",
        "name" => "",
        "surname" => "",
        "mail" => "",
        "password" => "",
        "role" => "",
        "status" => "",
        "created_at" => "",
        "updated_at" => "",
    );
    // public $id;
    // public $name;
    // public $surname;
    // public $mail;
    // public $password;
    // public $role;
    // public $status;
    // public $created_at;
    // public $updated_at;


    public function check_login($mail, $pass)
    {
        $status = false;
        if (Connect::$conn) {
            $sql = "SELECT * FROM users WHERE mail = '$mail'";
            $result = mysqli_query(Connect::$conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                if (password_verify($pass, $row['password'])) {
                    $object = [
                        "id" => $row["ID"],
                        "name" => $row["name"],
                        "surname" => $row["surname"],
                        "mail" => $row["mail"],
                    ];
                    $object = json_encode($object);
                    
                    // $_SESSION["user"] = $object;
                    // print_r($object);
                    // exit;
                    $GLOBALS['status']=json_encode(["error" => null]);
                    return True;
                } 
                else {
                    $GLOBALS['status']=json_encode(["error" => "password"]);
                    return false;
                }
            } 
            else {
                $GLOBALS['status']=json_encode(["error" => "mail"]);
                return false;
            }
        } else {
            Connect::get_connection();
            $this->check_login($mail, $pass);
        }
        return $GLOBALS['status'];
    }

    public function add_user()
    {
        $lastresult = false;
        if (Connect::$conn) {
            $email = $this->fields['mail'];
            $sql = "SELECT * FROM users WHERE mail = '$email'";
            $result = mysqli_query(Connect::$conn, $sql);

            if (mysqli_num_rows($result) == 0) {

                $date = date("Y/m/d");
                $sql = <<<insertion
                    insert into users(name , surname , mail , password , created_at ) values('{$this->fields['name']}','{$this->fields['surname']}','{$this->fields['mail']}','{$this->fields['password']}','$date')
                insertion;
                $result = mysqli_query(Connect::$conn, $sql);
                echo 'result==> ' . $result;
                if ($result) {
                    $GLOBALS['lastresult'] = true;
                } else {
                    $GLOBALS['lastresult'] = false;
                }
            } else {
                $GLOBALS['lastresult'] = false;
            }

        } else {
            Connect::get_connection();
            $this->add_user();
        }
        return $GLOBALS['lastresult'];
    }
        
}

?>