<?php
	if(!$isAdmin){
		header('Location: ../index.php');
	}
?>
<table>
    <?php $query = mysql_query("SELECT * FROM users");
    if($query === FALSE) {
        die(mysql_error());
    }
    $rows = mysql_num_rows($query);
    if ($rows != 0) {
        while ($row = mysql_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?php echo($row['userName']); ?></td>
                <td><a href="/tools/backofficeDeleteUser.php?userID=<?php echo($row['userID']); ?>">Delete user</a></td>
            </tr>
        <?php
        }
    }?>
</table>