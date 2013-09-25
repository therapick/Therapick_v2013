<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/navbar'); ?>

<?php 
	/* 
	contents variable holds the view passed in by the Template.php library.
	for example, the following call loads the home_page view file into the $contents variable:	
		
		$this->template->load('default', 'home/home_page');
	*/
	echo $contents;
?>

<?php $this->load->view('templates/footer'); ?>