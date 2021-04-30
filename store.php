<?php

class MyStore {
    private $server = "mysql:host=localhost;dbname=myStore";
    private $user = "root";
    private $pass = "";
    private $options = array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC );
    
    protected $connection;
    public function openConnection(){
        try {
            $this ->  connection = new PDO(
                $this -> server,
                $this -> user,
                $this -> pass,
                $this -> options
            );
           // echo "Connection Success!";
            return $this -> connection;
        } catch(PDOException $error){
            echo "Error Connection: " . $error->getMessage();
        }
    }

    public function closeConnection(){
        $this -> $connection = null;
    }

    public function getUsers(){
        $connection = $this -> openConnection();
        $statement = $connection -> prepare("SELECT * FROM users");
        $statement -> execute();
        $users = $statement -> fetchAll();
        $usersCount = $statement -> rowCount();

        if($usersCount > 0){
            return $users;
        }else {
            return 0;
        }
    }//end getUser
    
    public function login(){
        
        if(isset($_POST['submit'])){
            session_start(); 
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $connection = $this -> openConnection();
            $statement = $connection -> prepare("SELECT * FROM users WHERE email =? AND password=?");
            $statement -> execute([$username, $password]);
            $user = $statement -> fetch();
            $total = $statement-> rowCount();

            if ($total > 0){
                header("location:shop.php");
            }else{  
                echo '<script>alert("Incorrect Password or Username");</script>';  
            }
        }
    }
}

$mystore = new MyStore();

?>