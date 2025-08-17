<?php
class Bahan {
    private $db;

    public function __construct() {
        $this->db = new Database; 
    }

    public function getAll() {
        $this->db->query("SELECT * FROM bahan");
        return $this->db->resultSet();
    }

    public function getById($id) {
        $this->db->query("SELECT * FROM bahan WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
}
