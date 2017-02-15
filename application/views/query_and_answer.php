<html>

  <?php
    include "utility.php";
    error_reporting(0);
    if (($_POST)&&($_POST['query']!= '')) {

       $time_start = microtime(true);
       $query = $_POST['query'];
       //read inverted index
       $invertedIndex = readInvertedIndex();


       //process user 's query: split word
       include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'THSplitLib/segment.php');
       $segment = new Segment();
       $query_segment = split_sentence($query,$segment);
       $docList = '';
       //echo 'segmented words in query: ';
       foreach ($query_segment as $word) {
            // echo $word . '|';
             //get document id containing each query word
             if($invertedIndex[$word]==NULL){

             }else {
               $docList .= ';' . $invertedIndex[$word];
             }

       }
       $eachDoc = explode(';', $docList);
       $eachDoc = array_unique($eachDoc);

       //select from the database
       $sql = "SELECT * FROM food JOIN region on food.region_id = region.region_id JOIN cook_type on food.type_id = cook_type.type_id  WHERE ";
       foreach ($eachDoc as $docID) {
       	   if ($docID != '')
              $sql .= "id=" .'"'. $docID .'"'. " or ";
       }
	   $sql = rtrim($sql, "or ");
       $sql .= ';';

 	    $connection = connectDB();
        $connected=$connection['0'];
        $con=$connection['1'];

        if ($connected)  {
	       $rs=$con->query($sql);
         if($rs==true){
         //var_dump($sql);
	       //show each relevance document


	      $arr = $rs->fetch_all(MYSQLI_ASSOC);
        echo '<div class="body">'.
                '<div id="content">'.
                  '<div>'.
                    '<ul>';
	      foreach($arr as $row) {
          $pic=$row['img'].'.jpg';
          //echo '<form method="POST" action="'.site_url('food/show/'.$row['id']).'">';
          //echo "<form method=".'POST'."action=".site_url('food/show'.$row['id']).'>';
          							echo '<li>';
                        echo "<a href=".'show/'.'?'.'id'.'='.$row['id'].'>'.
                           "<img src=\"".base_url()."images/$pic\" alt=\"Image\" \"width='160' height='159'\"></img>".
                            "</a>";
          								echo '<div>'.
          									'<p>';
                              //echo "<input type=".'submit'.' value='.$row['id'].':'.$row['name'].'>';
          										echo "<a href=".'show/'.'?'.'id'.'='.$row['id'].'>'."<h3>" . $row['name'] . "</h3>".'</a>';
                              echo "<p>".'อาหารภาค :'.$row['region'].'<br>'.'ประเภท :'.$row['type']."</p>";
                              //echo "<input type='text' name='id' value='".$row['id']."'hidden>";
                              //echo '<h5>'. $row['solution'] .'</h5>';
                              //echo '<h5>'.$row['ingredient'].'</h5>';
          			echo						'</p>'.
          								'</div>';
          							echo '</li>';
                        echo "</form>";


			//	echo "<p>" . $row['detail']  .  "</p>";
		 }

		}
    else {
      echo "<div align='center'><h3><font size='6'>ไม่พบผลลัพธ์ที่ต้องการ</font><h3></div>";
    }
		$con->close();


       $time_end = microtime(true);
       $time = $time_end - $time_start;
       echo '<br/><b>ประมวลผล: </b> '.round($time,4).' วินาที';
    }
  }
  ?>
</html>
