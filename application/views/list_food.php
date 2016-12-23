<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body>
	<div class="body">
		<div>
			<div class="body">
				<div id="content">
					<div>

								<div>
									<?php foreach($data_result->result() as $row)
/*									if(is_null($row))
									{
										echo "<p> No data found </p>";
									}
									*/
								//	else{
										echo $row->Name."<br>";

									//}
									?>
								</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
