<?php
	if(!$isAdmin){
		header('Location: ../index.php');
	}
?>
<table>
    <?php $query = mysql_query("SELECT * FROM restaurants");
    if($query === FALSE) {
        die(mysql_error());
    }
    $rows = mysql_num_rows($query);
    if ($rows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            if ($row['userID'] != $_SESSION['userID']) {
                ?>
                <tr>
                    <td><?php echo($row['name']); ?></td>
                    <td><a href="/tools/backofficeDeleteRestaurant.php?restaurantID=<?php echo($row['restaurantID']); ?>">Delete restaurant</a></td>
                </tr>
            <?php
            }
        }
    }?>
</table>