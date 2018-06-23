<!DOCTYPE html>
<html>
	<head>
		<title>Notification</title>
	</head>
	<body>
		<a href = "#" id = "perm">Request Permission</a>
		<a href = "#" id = "trigger">Trigger</a>
		<script>
			var perm = document.getElementById('perm');
			var trigger = document.getElementById('trigger');
			perm.addEventListener('click', function(e) {
				e.preventDefault();

				if(!window.Notification) {
					alert('Sorry, notifications are not supported.');
				}
				else {
					Notification.requestPermission(function (p) {
						console.log(p);
					})
				}
			})
		</script>
	</body>
</html>