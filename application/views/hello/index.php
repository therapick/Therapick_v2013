<h1><?php echo $other_message; ?></h1>

<?php foreach ($therapists as $therapist): ?>
<div class="therapist">
  <p><?php echo $therapist->name; ?></p>
  <p><?php echo $therapist->location; ?></p>
</div>
<?php endforeach; ?>