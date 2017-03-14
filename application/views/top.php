<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body>
<div class="header">
  <div>
    <a href="<?php echo base_url();?>"><img src="<?php echo base_url()?>images/logo.png" alt="Logo"></a>
  </div>
  <form action="<?php echo site_url('food/answer')?>" method="post" >
    <input type="text" placeholder="ค้นหาสูตรอาหารไทย" name="query" id="search">
    <input type="submit"  id="searchbtn">
  </form>
</div>
</body>
</html>
