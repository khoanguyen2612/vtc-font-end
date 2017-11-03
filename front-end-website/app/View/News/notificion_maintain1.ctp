	<div class="maintain_noti">
		<?php echo $this->Html->image("maintain_noti_bg.jpg")?>
		<div class="container">
			<h3>Tin Tức</h3>
			<?php foreach ($data as $item) { ?>
			<h5><?php echo $item['News']['title'] ?></h5>
			<div class="notice">
				<p><?php echo $item['News']['content'] ?></p>
			</div>
			<?php } ?>
		</div>
	</div>

