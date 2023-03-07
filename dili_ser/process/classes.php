<?php 

class DB {
    private $con;
    public $is_connected = false;
    private $db = 'diligent_servers_db';
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';

    public function connect(){
        
        if (!$this->is_connected) {
            $this->is_connected = true;
           return $this->con = mysqli_connect($this->servername, $this->username, $this->password,$this->db); 
        }
    }
}


class Route {

    public function setPage($page) {
        $_GET['page'] = $page;
    }

    public function getPage(){
        if(!isset($_GET['page'])) {
            $_GET['page'] = 'home';
            return $_GET['page'];
          } else {
            return $_GET['page'];
          }
    }

    public function forceRoute($page){
        header("Location: index.php?page=$page");
    }
}


class adminlogin {
    // private $is_loggedin = false;
    private $instance;
    private $con;
    public $message;

    public function login ($username, $password){
        $this->instance = new DB();
        $this->con = $this->instance->connect();

        $lgsql = "SELECT id, username, password FROM adminlogin WHERE username='$username' AND password='$password'";
        $result = $this->con->query($lgsql);
        

        if ($result->num_rows > 0) {
            // $data;
            // output data of each row
            $data = $result->fetch_assoc();
            var_dump('data',$data);
            Session::set('id', $data['id']);
            Session::set('username', $data['username']);
            Session::set('password', $data['password']);
            Session::set('is_loggedin', true);
            // $is_loggedin = true;
            
            return true;
          }


          function forceRoute($page){
          header("Location:../admin_panel/index.php?page=$page");

          
    }
} 
}

class Session{
    // private 
    static function set($name,$value){
        $_SESSION[$name] = $value;
    }

    static function get($name){
        return $_SESSION[$name];
    }

    static function exist($name){
        if(isset($_SESSION[$name])) 
            return true;
            else return false;
    }

    static function delete($value){
        if(self::exist($value))
            unset($_SESSION[self::get($value)]);
    }
}