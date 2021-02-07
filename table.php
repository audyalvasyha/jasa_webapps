<!DOCTYPE html>
<?php

include('controller.php');
$lib = new Library();
$data_stock = $lib->show();

?>
<html lang='en'>
<head>
    <style>
        body {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        span {
            padding: 0 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #495057;
        }
        .head {
            font-weight: 500;
        }
        table {
            width: 100%;
            border: none;
            border-color: #dee2e6;
        }
        .thborder {
            border-left: none;
        }
    </style>
</head>
<body>
<table border=1>
    <thead style="background: #f8f9fa;">
        <tr>
            <th class="thborder"></th>
            <th><span class="head">No</span></th>
            <th><span class="head">Mat. Id</span></th>
            <th><span class="head">Mat. Group</span></th>
            <th><span class="head">St. Mat</span></th>
            <th><span class="head">Name</span></th>
            <th><span class="head">Stype</span></th>
            <th><span class="head">Sbin</span></th>
            <th><span class="head">Qty. Case</span></th>
            <th><span class="head">Sys. Case</span></th>
            <th><span class="head">Dif. Pack</span></th>
            <th><span class="head">Action</span></th>
        </tr>
    </thead>
    <?php
    $no = 1;
    foreach($data_stock as $row){
    ?>
    <tr>
        <td class="thborder"><span><input type='checkbox' name="check"></span></td>
        <td><span><?php echo $no++; ?></span></td>
        <td><span><?php echo $row['Mat_Id']; ?></span></td>
        <td><span><?php echo $row['Mat_Grup']; ?></span></td>
        <td><span><?php echo $row['St_Mat']; ?></span></td>
        <td><span><?php echo $row['Name']; ?></span></td>
        <td><span><?php echo $row['Stype']; ?></span></td>
        <td><span><?php echo $row['Sbin']; ?></span></td>
        <td><span><?php echo $row['Quantity_Case']; ?></span></td>
        <td><span><?php echo $row['Sys_Pack']; ?></span></td>
        <td><span><?php echo $row['Sys_Pack']-$row['Quantity_Case'] ?></span></td>
        <td><span><?php echo "<span><a style='color: #dc3545;' href='index.php?hapus_stock=".$row['id']."'>Delete  </a></span><span><a style='color: #28a745;' href='edit.php?update_stock=".$row['id']."'>Update</a></span>" ?></span></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>