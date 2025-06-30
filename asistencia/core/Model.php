<?php
class Model {
    protected $db;

    public function __construct() {
        $config = require __DIR__ . '/../config/database.php';

        try {
            $this->db = new PDO(
                "{$config['driver']}:host={$config['host']};dbname={$config['dbname']};charset=utf8",
                $config['username'],
                $config['password']
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("DB Connection Error: " . $e->getMessage());
        }
    }
}
