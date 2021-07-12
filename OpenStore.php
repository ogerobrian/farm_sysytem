<?php
 include "includes/header.php";
						
?>
<div class="modal-content_large animate" style=" background: linear-gradient(to bottom,lightblue,#EEEEEE,#d8f3d8);">
    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Type of Food</th>
                <th>Manufuturer</th>
                <th>Quantity In (kg)</th>
                <th>Quantity Used (kg)</th>
                <th>Quantity In Store (kg)</th>
                <th>Supplier</th>
                <th>Date Supplied</th>
                <th>Expirery Date</th>
            </tr>

            <?php 
// to get content from specific table
if(isset($_GET['open'])){
    $storeName = $_GET['open'];
    $sql_query = mysqli_query($conn, "SELECT * FROM $storeName");
    echo "<h1>".ucwords($storeName ." store") ."</h1>";
    while($row = mysqli_fetch_array($sql_query)){

?>
            <tr>
                <td><?php echo $row["type_of_food"];?></td>
                <td><?php echo $row["food_manufucturer"];?></td>
                <td><?php echo $row["quantity_in"];?></td>
                <td><?php echo $row["quantity_used"];?></td>
                <td><?php $a=$row["remaining"];
                if($a<50){
                    echo "<b style='color:red;'>".$row["remaining"]."</b>";
                }else{
                    echo $row["remaining"];
                }
                ?></td>
                <td><?php echo $row["supplier_name"];?></td>
                <td><?php echo $row["date_supplied"];?></td>
                <td><?php echo $row["expirely_dates"];?></td>

            </tr>
            <?php }} ?>
        </table>
    </div>
</div>
<?php
 include "includes/footer.php";
?>