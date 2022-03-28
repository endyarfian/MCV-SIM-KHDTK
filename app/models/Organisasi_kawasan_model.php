<?php

class Organisasi_kawasan_model {
    private $table = 'penataankawasan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenataanKawasan()
    {
        $this->db->query('SELECT*FROM ' . $this->table);
        return $this->db->resultSet();
    }

}
