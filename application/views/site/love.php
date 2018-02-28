<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My love!</title>
    <link rel="stylesheet" type="text/css" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/css/love.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/fav-icon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="https://s3-ap-southeast-1.amazonaws.com/huysblog/images/favicon/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Cookie|Nanum+Pen+Script|Pacifico|Tangerine|Yellowtail|Pattaya" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
    
	<!-- The video -->
	<video autoplay muted loop id="myVideo">
	  <source src="<?php echo public_url('images/'); ?>video.mp4" type="video/mp4">
	</video>

	<div class="content">
		<p id="begin">21-06-2017</p>
		<p id="hvh"><span id="me">H</span>     <i class="far fa-heart fa-5x"></i> <span id="mine">H</span></p>
		<p id="time"><span id="hour">12</span>:<span id="minute">31</span>:<span id="second">28</span> <span id="day">21</span>-<span id="month">02</span>-<span id="year">2018</span></p>
		<p class="inlove">We're in love</p>
		<p class="inlove"><span id="number">231</span> days.</p>

		<p class="poem" id="line-1">Yêu nhau một phút cũng đành,</p>
		<p class="poem" id="line-2">Miễn là phút ấy chân thành bên nhau!</p>
	</div>
	<script>
		function run(h, m, s)
		{

			var hour = document.getElementById('hour');
			var minute = document.getElementById('minute');
			var second = document.getElementById('second');

			setInterval(function(){

				s = s + 1;

				if (s == 60) {
					s = 0;
					m = m + 1;
					if (m == 60) {
						m = 0;
						h = h + 1;
					}
				}

				if (h < 10) {
					hour.innerHTML = "0" + h;
				}
				else {
					hour.innerHTML = h;
				}

				if (m < 10) {
					minute.innerHTML = "0" + m;
				}
				else {
					minute.innerHTML = m;
				}

				if (s < 10) {
					second.innerHTML = "0" + s;
				}
				else {
					second.innerHTML = s;
				}

			}, 1000);
		}

		var currentTime = new Date();
		var loveTime = new Date(2017,6,21);

		(currentTime.getDate() > 10)?(document.getElementById('day').innerHTML = currentTime.getDate()):(document.getElementById('day').innerHTML = "0" + currentTime.getDate());
		(currentTime.getMonth() + 1 > 10)?(document.getElementById('month').innerHTML = currentTime.getMonth() + 1):(document.getElementById('month').innerHTML = "0" + (currentTime.getMonth() + 1));
		document.getElementById('year').innerHTML = currentTime.getFullYear();
		
		document.getElementById('number').innerHTML = Math.round((currentTime.getTime() - loveTime.getTime())/86400/1000);

		run(currentTime.getHours(), currentTime.getMinutes(), currentTime.getSeconds());

	</script>
</body>
</html>