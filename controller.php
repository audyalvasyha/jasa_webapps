<?php
class Library {

    public function __construct(){
        $htnm = "localhost";
        $usnm = "root";
        $psnm = "";
        $dbnm = "stock"; 
        $this->db = new PDO("mysql:host={$htnm};dbname={$dbnm}", $usnm, $psnm);
    }
    public function show()
    {
        $query = $this->db->prepare('SELECT * FROM stock.in_gd');
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}
?>