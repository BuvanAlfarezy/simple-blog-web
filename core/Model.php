<?php

class Model {
    protected $db;

    public function __construct() {
        $this->db = require '../config/database.php';
    }
}