<?

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input id="img" type="file">
	<button id="sent">sent</button>
</body>
</html>
<script src="axios.min.js"></script>
<script>
	
	sent.onclick = function (event) {
		console.log(img.files);
		axios.post("test-backend.php", img.files[0] )
		.then(function (response) {
			console.log(response.data)
		});
	}

	

</script>