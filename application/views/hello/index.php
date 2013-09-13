<h1><?php echo $other_message; ?></h1>

<?php foreach ($therapists as $therapist): ?>
<div class="therapist">
  <p><?php echo $therapist->first_name; ?></p>
  <p><?php //echo $therapist->url_name; ?></p>
</div>
<?php endforeach; ?>