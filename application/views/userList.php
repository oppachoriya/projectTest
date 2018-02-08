<?php
/**
 * Created by PhpStorm.
 * User: op
 * Date: 8/2/18
 * Time: 12:03 PM
 */
?>

<div style="padding: 20px; margin: 20px;">
	<h3>User List</h3>
	<table>
		<?php $i = 0 ; foreach ($userList as $user) { ?>
			<tr>
				<td><?php echo ++$i ; ?></td><td><?php echo $user ; ?></td>
			</tr>
		<?php } ?>
	</table>
</div>
