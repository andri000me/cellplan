<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<meta name="resource-type" content="document" />
	<meta name="robots" content="all, index, follow"/>
	<meta name="googlebot" content="all, index, follow" />
	<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";

	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script>
	<?php } echo "\n\t";?>
</head>
<body>
	<div id="app">
		<?php if($this->load->get_section('navbar') != '') {
			echo $this->load->get_section('navbar');
		} ?>
		<main class="pt-5">
            <div class="container-fluid pt-3">
				<?php echo $output;?>
			</div>
		</main>
		<footer>
			<?php echo $this->load->get_section('footer'); ?>
		</footer>
	</div>
</body>
</html>
