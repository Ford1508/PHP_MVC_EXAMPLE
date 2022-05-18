<?php
    class Entity_Admin{
        public $id;
        public $username;
        public $password;
        public $role;
        
        public function __construct($_id, $_name, $_password,$_role)
        {
            $this->id = $_id;
            $this->username = $_name;
            $this->password = $_password;
            $this->role = $_role;
        }
    }
?>