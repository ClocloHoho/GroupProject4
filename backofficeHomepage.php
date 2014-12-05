<?php
if(!($connected && $isAdmin)){
	header('Location: index.php?');
}
?>
<a href="index.php?page=backofficeAddRestaurant"><button>Add restaurant</button></a>
<a href="index.php?page=backofficeModifyRestaurant"><button>Modify restaurant</button></a>
<a href="index.php?page=backofficeAddAdmin"><button>Add admin</button></a>
<a href="index.php?page=backofficeModifyUser"><button>Modify user</button></a>
