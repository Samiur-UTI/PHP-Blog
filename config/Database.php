<?php 
    class Database {
        //Params
        private $host = 'localhost';
        private $db = 'phpBlog';
        private $user = 'root';
        private $password = '';
        private $conn;

        public function connect(){
            $this->conn = null;
            try {
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db,$this->user,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                //throw $th;
                echo 'Error connection: '.$e->getMessage();
            }
            return $this->conn;
        }
    }
?>