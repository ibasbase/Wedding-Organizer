<?php
	include("nivoslider.php");
	$nivo=new NivoSlider('nivoslider',618,200);		// base path is same directory

	//$nivo->add_slide(ImagePath,URL,Caption);
	$nivo->add_slide('Gambar_Slider/slider1.jpg','','Rini Amira Wedding Organizer');
	$nivo->add_slide('Gambar_Slider/slider2.jpg','http://www.maxikom.co.id','Rini Amira Wedding Organizer');	
	$nivo->add_slide('Gambar_Slider/slider3.jpg','','Rini Amira Wedding Organizer');
	$nivo->add_slide('Gambar_Slider/slider4.jpg','','Rini Amira Wedding Organizer');

?>

<?php $nivo->render_includes(); ?>
<?php $nivo->render_slides() ?>
