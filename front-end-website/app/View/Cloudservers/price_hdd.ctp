<?php foreach ($data as $item) {?>
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
			<h3 id="item-<?php echo $item['Plan']['id']?>" val = <?php echo $item['Productprice']['price']?>><?php echo $item['Productprice']['price']?><small>VND/THÁNG</small></h3>
			
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
			<p class='hdd-hdd' plan_id = <?php echo $item['Plan']['id']?> val = <?php echo $item['Plan']['hdd']?>><?php echo $item['Plan']['hdd']?>G + <?=$hdd_hdd?>G Dung lượng ổ cứng</p>
			<p class="cpu"><?php echo $item['Plan']['ip']?> Địa chỉ Internet</p>
			<a href="" class="btn btn-info">ĐĂNG KÝ</a>
		</div>
	</div>
</div>
<?php }?>