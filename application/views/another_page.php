<?php include_once('common/header.php'); ?>

<p>
<?php if (isset($user) && isset($country)) { ?>
  Welcome, <?= $user ?> from <?= $country ?>! 
<?php } else { ?>
  Welcome!
<?php } ?>
</p>

<?php include_once('common/footer.php'); ?>