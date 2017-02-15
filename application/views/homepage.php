<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li class="current">
						<a href="<?php echo base_url();?>">หน้าหลัก</a>
					</li>
					<li>
						<a href="<?php echo site_url('food/list_n')?>">ภาคเหนือ</a>
					</li>
					<li>
						<a href="<?php echo site_url('food/list_c')?>">ภาคกลาง</a>
					</li>
					<li>
						<a href="<?php echo site_url('food/list_e')?>">ภาคอีสาน</a>
					</li>
					<li>
						<a href="<?php echo site_url('food/list_s')?>">ภาคใต้</a>
					</li>
					<li>
						<a href="about.php">เกี่ยวกับเรา</a>
					</li>
				</ul>
			</div>
			<div class="body">
				<div>
					<a href="<?php echo site_url('food/list_all')?>"><img src="<?php echo base_url()?>images/thai-food.jpg" alt="Image"></a>
				</div>
				<ul>
					<li class="current">
						<a href="blog.html"><img src="<?php echo base_url()?>images/holi-turkey.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.html">Holy Turkey</a></h2>
							<p>
								This is just a place holder
							</p>
						</div>
					</li>
					<li>
						<a href="blog.html"><img src="<?php echo base_url()?>images/fruits-and-bread.jpg" alt="Image"></a>
					</li>
					<li>
						<a href="blog.html"><img src="<?php echo base_url()?>images/dessert.jpg" alt="Image"></a>
					</li>
				</ul>
			</div>
			<div class="footer">
				<ul>
					<li>
						<h2><a href="<?php echo site_url('food/list_n')?>">ภาคเหนือ</a></h2>
						<a href="<?php echo site_url('food/list_n')?>"><img src="<?php echo base_url()?>images/Fn14.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="<?php echo site_url('food/list_c')?>">ภาคกลาง</a></h2>
						<a href="<?php echo site_url('food/list_c')?>"><img src="<?php echo base_url()?>images/f041.jpg" alt="Image"></a>
					</li>
				</ul>
				<ul>
					<li>
						<h2><a href="<?php echo site_url('food/list_e')?>">ภาคอีสาน</a></h2>
						<a href="<?php echo site_url('food/list_e')?>"><img src="<?php echo base_url()?>images/f018.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="<?php echo site_url('food/list_s')?>">ภาคใต้</a></h2>
						<a href="<?php echo site_url('food/list_s')?>"><img src="<?php echo base_url()?>images/fs6.jpg" alt="Image"></a>
					</li>
				</ul>
			</div>
		</div>
		<div>
			<div>
				<h3>วีดีโอการทำอาหาร</h3>
				<a href="https://www.youtube.com/user/FoodTravelTVchannel?annotation_id=annotation_659424&feature=iv&src_vid=W6o4MfcXWJA">
					<img src="<?php echo base_url()?>images/cooking-video.png" alt="Image"></a>
			</div>
			<div>
				<h3>รายการแนะนำ</h3>
				<ul id="featured">
					<li>
						<a href="index.php/food/show/?id=f006"><img src="<?php echo base_url()?>images/f006.jpg" width="75" height="75" alt="Image"></a>
						<div>
							<h2><a href="index.php/food/show/?id=f006">หมูปิ้งสูตรกระทิ</a></h2>
							<span>by: Anna</span>
						</div>
					</li>
					<li>
						<a href="index.php/food/show/?id=f083"><img src="<?php echo base_url()?>images/Fn6.jpg" width="75" height="75" alt="Image"></a>
						<div>
							<h2><a href="index.php/food/show/?id=f083">แกงส้มใส่ปลาตูน</a></h2>
							<span>by: Sarah</span>
						</div>
					</li>
					<li>
						<a href="index.php/food/show/?id=f095"><img src="<?php echo base_url()?>images/Fs17.jpg" width="75" height="75" alt="Image"></a>
						<div>
							<h2><a href="index.php/food/show/?id=f095">ขนมจีนน้ำยากระทิ</a></h2>
							<span>by: Rico</span>
						</div>
					</li>
				</ul>
			</div>

			<div>
				<h3>Get Updates</h3>
				<a href="https://www.facebook.com/VisitsakChuklin" target="_blank" id="facebook">Facebook/Visitsak</a>
				<a href="https://www.facebook.com/GingGanBaiEz" target="_blank" id="facebook">Facebook/Pirunrat</a>
				<a href="https://www.facebook.com/jeeraphat.wihokharn" target="_blank" id="facebook">Facebook/Jeeraphat</a>

			</div>
		</div>
	</div>
</body>
</html>
