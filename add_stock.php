<?php
include('controller.php');
$lib = new Library();
if (isset($_POST['add'])){
    $mat_id     = $_POST['Mat_Id'];
    $mat_group  = $_POST['Mat_Grup'];
    $st_mat     = $_POST['St_Mat'];
    $name       = $_POST['Name'];
    $stype      = $_POST['Stype'];
    $qty_case   = $_POST['Quantity_Case'];
    $sys_pack   = $_POST['Sys_Pack'];

    $add_status = $lib->add_data($mat_id, $mat_group, $st_mat, $name, $stype, $qty_case, $sys_pack);
    if($add_status){
        header('Location: index.php');
    }
}
?>
<html>
<head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }
        h3 {
            margin-bottom: 40px;
        }
        span {
            margin: 20px 0;
        }
        .form-group-list {
            width: 100px;
            display: block;
        }
        .row {
            margin-bottom: 20px;
        }
        input {
            height: 28px;
            margin-right: 40px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin: 0;">
        <h3>Add Item Stock</h3>
        <form method="post" action="">
        <div class="row">
            <label class="col-sm-2 col-from-label">Mat. Id</label>
            <input type="number" name="Mat_Id" id="mat_id">
            <label class="col-sm-2 col-from-label">Stype</label>
            <select name="Stype">
                <option>ZAA</option>
                <option>ZAB</option>
                <option>ZAC</option>
                <option>ZAD</option>
                <option>ZAE</option>
                <option>ZAF</option>
                <option>ZAG</option>
                <option>ZAH</option>
            </select>
        </div>
        <div class="row">
            <label class="col-sm-2 col-from-label">Mat. Group</label>
            <input type="text" name="Mat_Grup" id="mat_grup">
            <label class="col-sm-2 col-from-label">Quantity. Case</label>
            <input type="number" name="Quantity_Case" id="qty_case">
        </div>
        <div class="row">
            <label class="col-sm-2 col-from-label">St. Mat</label>
            <input type="text" name="St_Mat" id="st_mat">
            <label class="col-sm-2 col-from-label">Sys. Pack</label>
            <input type="number" name="Sys_Pack" id="sys_pack">
        </div>
        <div class="row">
            <label class="col-sm-2 col-from-label">Name</label>
            <textarea cols="23" name="Name" id="name"></textarea>
            <label class="col-sm-2 col-from-label"></label>
            <input style="margin-left: 40px;margin-top: 40px;" type="submit" name="add" value="ADD">
        </div>
        </form>
    </div>
</body>