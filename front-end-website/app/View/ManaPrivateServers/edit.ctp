<div class="location_service">
	<div class="l_banner">
			<img src="img/l_banner.jpeg" alt="" id="lbanner_img" class="img-responsive">
			<div class="l_title">
				<h1>DỊCH VỤ CHO THUÊ CHỖ ĐẶT THIẾT BỊ</h1>
				<p> VTC mang đến không gian, hạ tầng chỗ đặt lý tưởng, công cụ quản lý thông minh, dịch vụ chất lượng, 
					cho phép bạn và doanh nghiệp của mình an tâm trao gửi niềm tin.
				</p>
			</div>
	</div>
	
	<form action="" method="post">
		<!-- for content page -->
		<textarea name="content" class="ckeditor">
			<?php echo $content['0']['Staticpages']['head_service']; ?>
			
			<?php echo $content['0']['Staticpages']['content']; ?>

		</textarea>
		<!-- end content page -->
		<button type="submit"></button>
	</form>	
</div>



<?php echo $this->Html->script('ckeditor/ckeditor');?>

<script type="text/javascript">
	$(function () {
    CKEDITOR.config.contentsCss = [CKEDITOR.basePath + 'contents.css'];
});
	editor.config.allowedContent = true;
</script>