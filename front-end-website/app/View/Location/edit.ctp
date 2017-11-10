<div class="location_service">
	<?php echo eval("?>".$content['0']['Staticpages']['banner']."<?php") ?>
	<div class="l_head">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
					<?php echo $this->Html->image('location_icon1.png'); ?>
					<h5>Bảo mật đa tẦng</h5>
					<p>
						Máy chủ của bạn được 
						kiểm soát bởi hệ thống camer
						giám sát bảo mật bằng vân tay ,
						theo dõi từ xa
					</p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
					<?php echo $this->Html->image('location_icon2.png'); ?>
					<h5>Bảo mật đa tẦng</h5>
					<p>
						Máy chủ của bạn được 
						kiểm soát bởi hệ thống camer
						giám sát bảo mật bằng vân tay ,
						theo dõi từ xa
					</p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
					<?php echo $this->Html->image('location_icon4.png'); ?>
					<h5>Bảo mật đa tẦng</h5>
					<p>
						Máy chủ của bạn được 
						kiểm soát bởi hệ thống camer
						giám sát bảo mật bằng vân tay ,
						theo dõi từ xa
					</p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 text-center">
					<?php echo $this->Html->image('location_icon3.png'); ?>
					<h5>Bảo mật đa tẦng</h5>
					<p>
						Máy chủ của bạn được 
						kiểm soát bởi hệ thống camer
						giám sát bảo mật bằng vân tay ,
						theo dõi từ xa
					</p>
				</div>
			</div>
		</div>
	</div>
	<form action="" method="post">
	<!-- for content page -->
		<textarea name="content" class="ckeditor"><?php echo eval("?>".$content['0']['Staticpages']['content']."<?php") ?></textarea>
	<!-- end content page -->
		<button type="submit"></button>
	</form>
</div>



<?php echo $this->Html->script('ckeditor/ckeditor');?>

<script type="text/javascript">
	$(function () {
    CKEDITOR.config.contentsCss = [CKEDITOR.basePath + 'contents.css'];
});
</script>