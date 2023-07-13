<?php
class Connect {
    
    private static $host = 'localhost';
    private static $dbUsername = 'root';
    private static $dbPassword = '';
    private static $dbName = 'test';
    //
    public static $conn=null;
   //////////// Methodes /////////////////

    public static function get_connection() {
        // Create a connection
        self::$conn = new mysqli(self::$host, self::$dbUsername, self::$dbPassword, self::$dbName);
        // Check connection
        if (self::$conn->connect_error) {
            die("Connection failed: " . self::$conn->connect_error);
        }
        return self::$conn;
    }

    // public function check_login($mail ,$pass){
    //     $this->get_connection();
    //     if($this->$conn){
    //         $sql = "SELECT * FROM users WHERE mail = ".$mail ;
    //         $query = mysqli_query($conn,$select);
    //         if(mysqli_num_rows($query)){
    //             $row = mysqli_fetch_array($query);
    //             if($row["password"] == $pass){
    //                 return true;
    //             }
    //             else
    //                 return false;
    //         }
    //         else
    //             return false;
    //     }
    //     else
    //         return false;
        
        
    // }


}

?>



