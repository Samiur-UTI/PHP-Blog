<?php 
    class Post{
        //DB params
        private $conn;
        private $table = 'posts';
        //Post params
        private $id;
        private $title;
        private $body;
        private $created_at;

        //Establish constructor with DB
        public function __construct($db){
            $this->conn = $db;
        }
        //Methods
        public function create($a,$b){
            $query = 'INSERT INTO '
                        .$this->table.
                     '(title,body) VALUES (:title,:body)';
            $stmt = $this->conn->prepare($query);
            
            $this->title = htmlspecialchars(strip_tags($a));
            $this->body = htmlspecialchars(strip_tags($b));

            $stmt->bindParam('title', $this->title);
            $stmt->bindParam('body', $this->body);

            $stmt->execute();

            if($stmt->execute()){
                return true;
            } else {
                return false;
            }
        
        }
        public function read(){
            $query = 'SELECT * FROM '.$this->table;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        }
        public function read_single(){
            $query = 'SELECT * FROM '.$this->table.'WHERE id = ?';
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1,$this->id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->id = $row['id'];
            $this->title = $row['title'];
            $this->body = $row['body'];
        }
        public function update(){
            $query = 'UPDATE TABLE '.$this->table.
                     'SET title=:title, body:body 
                     WHERE id= :id';
            $stmt = $this->conn->prepare($query);
            $this->title = htmlspecialchars(strip_tags($this->title));
            $this->post = htmlspecialchars(strip_tags($this->post));

            $stmt->bindParam('title', $this->title);
            $stmt->bindParam('body', $this->body);
            $stmt->bindParam('id', $this->id);
            $stmt->execute();
            if($stmt->execute()){
                return true;
            } else {
                return false;
            }
        }
        public function delete(){
            $query = 'DELETE FROM '.$this->table.'WHERE id=?';
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1,$this->id);
            $stmt->execute();
        }
    }


?>