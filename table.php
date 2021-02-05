<?php
include('controller.php');
$lib = new Library();
$data_stock = $lib->show();

if(isset($_GET['hapus_stock'])){
    $id = $_GET['hapus_stock'];
    $status = $lib->delete($id);
    if($status)
    {
        header('Loacation: table.php');
    }
}
?>
<!DOCTYPE html>
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
    </tr>
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
    </tr>
    <?php
    }
    ?>
</table>
</body>