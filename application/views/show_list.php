<?php
echo '<div class="body">'.
        '<div id="content">'.
          '<div>'.
            '<ul>';
foreach($data_result->result_array() as $row) {
  $pic=$row['img'].'.jpg';
  echo '<form method="POST" action="'.site_url('food/show/'.$row['id']).'">';
  //echo "<form method=".'POST'."action=".site_url('food/show'.$row['id']).'>';
                echo '<li>';
                echo "<a href=\"index.html\">".
                   "<img src=\"".base_url()."images/$pic\" alt=\"Image\" \"width='160' height='159'\"></img>".
                    "</a>";
                  echo '<div>'.
                    '<p>';
                      echo "<input type=".'submit'.' value='.$row['id'].':'.$row['name'].'>';
                      //echo "<h3>" . $row['id'] . ':' . $row['name'] . "</h3>";
                      echo "<input type='text' name='id' value='".$row['id']."'hidden>";
                      //echo '<h5>'. $row['solution'] .'</h5>';
                      //echo '<h5>'.$row['ingredient'].'</h5>';
        echo						'</p>'.
                  '</div>';
                echo '</li>';
                echo "</form>";


//	echo "<p>" . $row['detail']  .  "</p>";
}
?>
