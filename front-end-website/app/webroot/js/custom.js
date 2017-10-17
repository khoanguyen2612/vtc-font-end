jQuery(document).ready(function ($) {

	var jssor_1_options = {
		$AutoPlay: 1,
		$SlideWidth: 770,
		$ArrowNavigatorOptions: {
			$Class: $JssorArrowNavigator$
		},
		$BulletNavigatorOptions: {
			$Class: $JssorBulletNavigator$
		}
	};

	var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

	// jssor_1_slider.$On($JssorSlider$.$EVT_PARK,function(slideIndex, fromIndex){

	// 	var slide_item = document.getElementsByClassName("item-slide");

	// 	if(slide_item[slideIndex].classList.toggle('active')){
	// 		slide_item[fromIndex].classList.remove('active');
	// 	}


	// });
	/*#region responsive code begin*/

	var MAX_WIDTH = 1920;

	function ScaleSlider() {
		var containerElement = jssor_1_slider.$Elmt.parentNode;
		var containerWidth = containerElement.clientWidth;

		if (containerWidth) {

			var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

			jssor_1_slider.$ScaleWidth(expectedWidth);
		}
		else {
			window.setTimeout(ScaleSlider, 30);
		}
	}

	ScaleSlider();

	$(window).bind("load", ScaleSlider);
	$(window).bind("resize", ScaleSlider);
	$(window).bind("orientationchange", ScaleSlider);
	/*#endregion responsive code end*/
});

$(document).ready(function(){
	$("i.item-list").click(function(){
				// console.log($(this).siblings());
				if($(this).hasClass("active")){
					$(this).removeClass("active");
				}else{
					$(this).addClass("active");
				}

				$(this).parent().next().slideToggle("slow");
			});
});