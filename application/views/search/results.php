<?php //echo $query_input; ?>

<?php foreach ($therapists as $therapist): ?>

<!-- ( PUT YOUR HTML THAT REPRESTENTS A THERAPIST RESULT ) -->
<div class="therapist_result">
	<p><?php echo $therapist->first_name ?> <?php echo $therapist->last_name ?></p>
</div>
 
<?php endforeach; ?>