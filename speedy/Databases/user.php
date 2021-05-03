<?php

    include 'config.php';

    class User{

        public $db;
        public $mysqli;

        public function __construct()
        {
            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            if(mysqli_connect_errno()){
                echo "Error: Could not connect to database";
                exit;
            }
        }

        //Registration
        public function reg_user($email, $password, $name, $alamat, $telp){
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE email = '$email' OR password = '$password'";

            //chek
            $chek = $this->db->query($sql);
            $count_row = $chek->num_rows;

            //if the email is not in db then insert to the database
            if($count_row == 0){
                $sql1 = "INSERT INTO users SET email = '$email', password = '$password', name = '$name', address = '$alamat', phone = '$telp'";
                $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno(). "Data cannot insertd");
                return $result;
            }else{
                return false;
            }
        }

        // login process
        public function check_login($email, $password){

            $password = md5($password);
            $sql2     = "SELECT id_user FROM users WHERE email = '$email' AND password = '$password'";

            //checking user
            $result = mysqli_query($this->db, $sql2);
            $user_data = mysqli_fetch_array($result);
            $count_row = $result->num_rows;

            if($count_row == 1 ){
                $_SESSION['login'] = true;
                $_SESSION['id_user'] = $user_data['id_user'];
                return true;
            }else{
                return false;
            }
        }

        // starting the session
        public function get_session(){
            return $_SESSION['login'];
        }

        public function user_logout(){
            $_SESSION['login'] = FALSE;
            session_destroy();
        }
    }

?>