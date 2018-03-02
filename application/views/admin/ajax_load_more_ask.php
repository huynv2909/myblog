<?php foreach ($asks as $ask): ?>
	<tr>
		<td><?php echo $ask->created; ?></td>
		<td><?php echo $ask->content; ?></td>
	</tr>
<?php endforeach ?>