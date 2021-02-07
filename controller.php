<?php
class Library {

    public function __construct(){
        $htnm = "localhost";
        $usnm = "root";
        $psnm = "";
        $dbnm = "stock"; 
        $this->db = new PDO("mysql:host={$htnm};dbname={$dbnm}", $usnm, $psnm);
    }

    public function add_data($mat_id, $mat_group, $st_mat, $name, $stype, $qty_case, $sys_pack){
    $data  = $this->db->prepare('INSERT INTO in_gd (Mat_Id, Mat_Grup, St_Mat, Name, Stype, Quantity_Case, Sys_Pack) VALUES (?, ?, ?, ?, ?, ?, ?)');

    $data->bindParam(1, $mat_id);
    $data->bindParam(2, $mat_group);
    $data->bindParam(3, $st_mat);
    $data->bindParam(4, $name);
    $data->bindParam(5, $stype);
    $data->bindParam(6, $qty_case);
    $data->bindParam(7, $sys_pack);

    $data->execute();
    return $data->rowCount();
    }

    public function show()
    {
        $query = $this->db->prepare('SELECT * FROM stock.in_gd');
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM in_gd WHERE id=?");
        $query->binParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($mat_id, $mat_group, $st_mat, $name, $stype, $qty_case, $sys_pack){
        $query = $this->db->prepare('UPDATE in_gd SET Mat_Id=?, Mat_Grup=?, St_Mat=?, Name=?, Stype=?, Quantity_Case=?, Sys_Pack=? WHERE id=?');

        $query->bindParam(1, $mat_id);
        $query->bindParam(2, $mat_group);
        $query->bindParam(3, $st_mat);
        $query->bindParam(4, $name);
        $query->bindParam(5, $stype);
        $query->bindParam(6, $qty_case);
        $query->bindParam(7, $sys_pack);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id){
        $query = $this->db->prepare("DELETE FROM in_gd WHERE id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}
?>