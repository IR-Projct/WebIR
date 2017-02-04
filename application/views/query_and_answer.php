<html>
  <h3>Here is the list of relevance document</h3>

  <?php
    include "utility.php";

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
       $sql = "SELECT * FROM food WHERE ";
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
	      foreach($arr as $row) {
				echo "<h4>" . $row['id'] . ':' . $row['name'] . "</h4>";
			//	echo "<p>" . $row['detail']  .  "</p>";
		 }

		}
		$con->close();


       $time_end = microtime(true);
       $time = $time_end - $time_start;
       echo '<br/><b>ประมวลผล: </b> '.round($time,4).' วินาที';
    }
  }
  ?>
</html>
