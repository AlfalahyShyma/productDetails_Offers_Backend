<?php include'header.php';?>
 </br></br>
 <link rel="stylesheet" href="app/assets/css/jquery.exzoom.css"> 
 <link rel="stylesheet" href="app/assets/css/styleProduct_de.css">
 <link rel="stylesheet" href="app/assets/css/zoom.css">
 <script src="app/assets/js/jquery.exzoom.js"></script> 
 <script src="app/assets/js/script.js"></script> 




 <body>

		<!-- ggggggggggggggggggggggggggggg -->
		<div class="container ">
	        <div class="heading-section">
	            <h2>تفاصيل المنتج</h2>
			</div>
			<?php
				 $row=$data['products'];
				 foreach($row as $rows){
					 
                    
                        
				  
                  
							echo'
							<div class="row mb-4">
								<div class="col-md-2">
							  
							</div>
								<div class="col-md-6">
									<div class="input-group input-group-lg">
										
										
										
									</div>
								</div>
								<div class="col-md-1">
									
								</div>
								<div class="col-md-1">
									
								</div>
								<div class="col-md-2">
									
										</div>
									</div>
									<br>
							<div class="row mt-4">
								<div class="col-md-6 col-sm-6">
									<div class="exzoom" id="exzoom">
										<!-- Images -->
										<div class="exzoom_img_box" style="background:white">
										  <ul class="exzoom_img_ul">
										
										  <li><img src="'.$rows->product_main_image.'"/></li>'?>
										  <?php
										   $branch_img=explode(',',$rows->product_branch_images);
										   for($i=0; $i<sizeof($branch_img)-1; $i++)
										   echo 
											'<li><img src="'.$branch_img[$i].'"/></li>
										   	
											'?>
											
										
											
										 <?php
										 echo' </ul>
										</div>
										<!-- Thumbnail Nav-->
										<div class="exzoom_nav"></div>
									   
									  </div>
									 
							
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="product-dtl">
										<div class="product-info">
											<div class="product-name"> '.$rows->product_name.'</div>
											
											<div class="product-price-discount"><span>'.$rows->product_price.'</span><span class="line-through">$29.00</span></div>
										</div>
										<p>'.$rows->product_details.'</p>
										
										<div class="product-count">
											<label for="size">Quantity</label>
											<form action="#" class="display-flex">
												<div class="qtyminus">-</div>
												<input type="text" name="quantity" value="1" class="qty">
												<div class="qtyplus">+</div>
											</form>
											<a href="cart?id='.$rows->Product_id.'" class="round-black-btn">إضافة إلى السلة</a>
											<a href="favorite?id='.$rows->Product_id.'" class="round-black-btn">إضافة إلى المفضلة</a>

											
										</div>
									</div>
								</div>
							</div>';}
							 ?>
			
		</div>
	</div>
</div>	
			<div class="container ">
	       
	        <div class="row">
	        	<div class="col-md-12">
					<section>
					<br><br><br><hr>
			
		
		<!-- <div style="text-align:center;font-size:14px;padding-bottom:20px;">Get free icon packs for your next project at <a href="http://iiicons.in/" target="_blank" style="color:#ff5e63;font-weight:bold;">www.iiicons.in</a></div> -->
	</section>
	</div>
		</div>
		</div>
	
	
	<script type="text/javascript">
	 $(function(){
 
	   $("#exzoom").exzoom({
		 // options here
	   });
 
	 });
	</script>
	<!-- partial -->
  <script  src="./script.js"></script>

</body>

<?php include'footer.php';?>