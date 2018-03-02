<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Huy NV plan</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/fav-icon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/apple-touch-icon.png">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style type="text/css">
    	body {
			font-family: Tahoma, Geneva, sans-serif;
			font-size: 25px;
		}

		#page {
			min-height: 200px;
		}

		#label-root {
			margin: 30px auto;
		}

		.work-content {
			border-bottom: 2px solid red;
			margin-left: 20px;
		}

		.work-item {
			margin-bottom: 20px;
		}

		.work-done {
			border-bottom: 2px solid #1abc9c;
		}

		#empty {
			display: none;
		}

		input[type=checkbox]
		{
		  /* Double-sized Checkboxes */
		  -ms-transform: scale(2); /* IE */
		  -moz-transform: scale(2); /* FF */
		  -webkit-transform: scale(2); /* Safari and Chrome */
		  -o-transform: scale(2); /* Opera */
		  padding: 10px;
		}
    </style>
</head>
<body>
	<div class="container">
		<h2 class="text-center" id="label-root">Công việc ngày hôm nay</h2>
		<?php if (count($works) == 0): ?>
			<p class="text-info text-center" id="note">Hôm nay chưa có kế hoạch gì, lên kế hoạch ngay ông ơiiii!</p>
		<?php endif ?>

		<div class="row" id="page">
		    <div class="col-md-6" id="list-work">
		    	<?php foreach ($works as $work): ?>
		    		<?php if (!$work->done): ?>
		    			<div class="work-item">
				    		<input type="checkbox" class="work" data-url="<?php echo admin_url('plan/done'); ?>" data-id="<?php echo $work->id; ?>" value="<?php echo $work->content; ?>">
				    		<span class="work-content"><?php echo $work->content; ?></span>
				    	</div>
		    		<?php endif ?>
		    	<?php endforeach ?>
		    </div>
		    <div class="col-md-6" id="list-done">
		    	<?php $any = false; ?>
		    	<?php foreach ($works as $work): ?>
		    		<?php if ($work->done): ?>
		    			<p class="work-done"><?php echo $work->content; ?></p>
		    			<?php $any = true; ?>
		    		<?php endif ?>
		    	<?php endforeach ?>

		    	<?php if (!$any): ?>
		    		<p class="text-danger text-center">Work nowwwwwwwwwwwwww!</p> 
		    	<?php endif ?>
		    </div>
		</div>
		<form action="<?php echo admin_url('plan/add'); ?>" method="post" id="add-form">
			<input type="submit" name="Add" class="float-right btn-primary" value="Add" id="add-but">

			<textarea class="work float-right" rows="3" name="content" id="content"></textarea>
			<p id="empty" class="text-danger">Không có gì cũng submit -_-</p>
		</form>
	</div>

	<script type="text/javascript">
		$('#add-form').submit(function(event) {
			event.preventDefault();

			var content = $('#content').val();

			if ($.trim(content) == "") {
				$('#empty').fadeIn();
				return false;
			}

			var url = $(this).attr('action');

			$.ajax({
				url : url,
				type : 'post',
				dataType : 'json',
				data : {
					content : content
				},
				success : function(result) {
					$('#content').val('');
					if ($('#note').is(":visible")) $('#note').hide();

					var div = document.createElement('div');
					$(div).addClass('work-item');
					var checkbox = document.createElement('input');
					$(checkbox).attr({
						type: 'checkbox',
						class : 'work',
						value: content
					});

					$(checkbox).data('url', result.url);
					$(checkbox).data('id', result.id);

					var span = document.createElement('span');
					$(span).addClass('work-content');
					$(span).html(content);


					$(div).append(checkbox, span);

					$('#list-work').prepend(div);
				}
			});
		});

		$(document).on('change', '.work', function() {
			if (this.checked) {
				$(this).parent().hide();
				var p = document.createElement('p');
				$(p).addClass('work-done');
				$(p).html($(this).val());

				$('#list-done').prepend(p);

				var id = $(this).data('id');
				var url = $(this).data('url');

				$.ajax({
					url : url,
					type : 'post',
					data : {
						id : id
					},
					success : function(result) {
						console.log(result);
					}
				});
			}
		});
	</script>
</body>
</html>