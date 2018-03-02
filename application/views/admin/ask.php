<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ask Manager</title>

	<!-- Favicon -->
    <link rel="shortcut icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/fav-icon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/apple-touch-icon.png">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th>Date</th>
						<th>Content</th>
					</tr>
				</thead>
				<tbody  id="ask-table">
					<?php foreach ($asks as $ask): ?>
						<tr>
							<td><?php echo $ask->created; ?></td>
							<td><?php echo $ask->content; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<input type="submit" name="Load-More-Ask" id="more-asks" class="btn btn-primary" value="Load more" data-url="<?php echo admin_url('ask/load'); ?>">
		</div>
	</div>

	<script type="text/javascript">
		var page = 1;

		$('#more-asks').click(function(event) {
			console.log(page);

			$.ajax({
				url: $(this).data('url'),
				type: 'get',
				dataType: 'text',
				data: {
					page: page
				},
			})
			.done(function(result) {
				if (result == "") {
					$('#more-asks').attr('disabled', true);
				}
				else {
					$('#ask-table').append(result);
				}

				page++;
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
	</script>
</body>
</html>