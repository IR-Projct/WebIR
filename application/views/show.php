
<div class="body">

			<div class="body">
				<div id="content">

					<div>
					<div>
						<?php foreach($data_result->result_array() as $row){
							$pic=$row['img'].'.jpg';
							echo '<h3>'.$row['name'].'</h3>';
							echo "<img src=\"".base_url()."images/$pic\" alt=\"Image\" ></img>";
							echo "<h5>"."INGREDIENTS"."</h5>";
							echo '<ol class='."ingredients".'>';
								//'<li>';
									echo $row['ingredient'];
								//echo "</li>";
							echo "</ol>";
							echo "<h5>Solution</h5>";
							echo '<ol class='."directions".'>';
								//echo "<li>";
									echo $row['solution'];
								echo //"</li>".
							"</ol>".
						"</div>".
					"</div>".
				"</div>".
			"</div>".
		"</div>".
		"<div>";
	}
		?>
