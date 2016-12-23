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
  <form action="<?php echo site_url('food/search')?>" method="post" >
    <input type="text" placeholder="Search from our 10,000+ Recipes around the world" name="name_search" id="search">
    <input type="submit"  id="searchbtn">
  </form>
</div>
</body>
</html>
