<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form action="#" id="form">
			<input type="text" id="name" placeholder="Enter name" required />
			<input type="button" id="submit" value="Add">
		</form>
		<ul id="main">
			<?php include "get.php";?>
		</ul>
	</div>
	<script src="jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			var x = 0;
			$("#submit").on("click", function(){
				x++;
				var name = $("#name").val();
				if (name == '') {
					alert("Fill the field");
				}else{
					$.ajax({
						url:"data.php",
						type:"POST",
						data:{name:name},
						success:function(data){
							$("#main").load("get.php");
							$("#name").val('');
						}
					});
				}
			});
			$(document).on("click", ".remove", function(){
				var remove_id = $(this).attr("id");
				$("#row" + remove_id).remove();
				$.ajax({
					url:"data.php",
					type:"POST",
					data:{remove:remove_id},
					success:function(data){
					}
				});
			});


			
		});
	</script>
</body>
</html>