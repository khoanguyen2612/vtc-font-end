		<!-- <div id="CSLinux" class="tab-pane fade in active" > -->
		<?php if(isset($linux)){
			echo '<div id="CSLinux" class="tab-pane fade in active" >';
		}else{
			echo '<div id="CSLinux" class="tab-pane fade" >';
		}
		?>
			<div class="row" >	
				<?php foreach ($datal as $item) {?>
				<div class="col-md-6 col-lg-4 item-<?php echo $item['Plan']['id']?>" >
					<?php 
						if($best_seller==$item['Plan']['id']){ 
							echo '<div class="cloud_item cloud_topsell">
							<span id="cloud_top">Best Seller</span>';}
						else{ 
							echo '<div class="cloud_item">';} 
					?>
						<h4><?php echo $item['ProductPrice']['product_name']?></h4>
						<div class="price" >
							<h3 id="item-<?php echo $item['Plan']['id']?>" val = <?php echo $item['ProductPrice']['price']?>><?php echo number_format($item['ProductPrice']['price'])?><small>VND/THÁNG</small></h3>
							
						</div>
						<?php 
							if($best_seller==$item['Plan']['id']){ 
								echo '<img src="img/narrow_bestcloud.png" class="img-responsive">';}
							else{ 
								echo '<img src="img/narrow_cloud.png" class="img-responsive">';} 
						?>
						<div class="cloud-config">
							<p><?php echo $item['Plan']['cpu']?> CPU</p>
							<p><?php echo $item['Plan']['ram']?> RAM</p>
							<p class='hdd-hdd' val = <?php echo $item['Plan']['hdd']?>><?php echo $item['Plan']['hdd']?>G + <?=$hdd_hdd?>G Dung lượng ổ cứng</p>
							<p class="cpu"><?php echo $item['Plan']['ip']?> Địa chỉ Internet</p>
							<a href="" class="btn btn-info">ĐĂNG KÝ</a>
						</div>
					</div>
				</div>
				<?php }?>
			
		</div></div>
		<?php if(isset($linux)){
			echo '<div id="CSWindown" class="tab-pane fade">';
		}else{
			echo '<div id="CSLinux" class="tab-pane fade in active" >';
		}
		?>
		<!-- <div id="CSWindown" class="tab-pane fade"> -->
			<div class="row">
				<?php foreach ($dataw as $item) {
				 ?>
				<div class="col-md-6 col-lg-4 item-<?php echo $item['Plan']['id']?>" >
					<?php 
						if($best_seller==$item['Plan']['id']){ 
							echo '<div class="cloud_item cloud_topsell">
							<span id="cloud_top">Best Seller</span>';}
						else{ 
							echo '<div class="cloud_item">';} 
					?>
						<h4><?php echo $item['Productprice']['product_name']?></h4>
						<div class="price" >
							<h3 id="item-<?php echo $item['Plan']['id']?>" val = <?php echo $item['Productprice']['price']?>><?php echo number_format($item['Productprice']['price'])?><small>VND/THÁNG</small></h3>
							
						</div>
						<?php 
							if($best_seller==$item['Plan']['id']){ 
								echo '<img src="img/narrow_bestcloud.png" class="img-responsive">';}
							else{ 
								echo '<img src="img/narrow_cloud.png" class="img-responsive">';} 
						?>
						<div class="cloud-config">
							<p><?php echo $item['Plan']['cpu']?> CPU</p>
							<p><?php echo $item['Plan']['ram']?> RAM</p>
							<p class='hdd-hdd' val = <?php echo $item['Plan']['hdd']?>><?php echo $item['Plan']['hdd']?>G + <?=$hdd_hdd?>G Dung lượng ổ cứng</p>
							<p class="cpu"><?php echo $item['Plan']['ip']?> Địa chỉ Internet</p>
							<a href="" class="btn btn-info">ĐĂNG KÝ</a>
						</div>
					</div>
				</div><?php }?>
			
		</div>