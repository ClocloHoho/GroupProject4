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
            if ($row['userID'] != $_SESSION['userID']) {
                ?>
                <tr>
                    <td><?php echo($row['userName']); ?></td>
                    <td>
                        <?php
                        if($row['isAdmin']==1){
                            echo("Admin");
                        }else{
                            echo("user");
                        }
                        ?>
                    </td>
                    <td><a href="/tools/backofficeDeleteUser.php?userID=<?php echo($row['userID']); ?>">Delete user</a></td>
                </tr>
            <?php
            }
        }
    }?>
</table>