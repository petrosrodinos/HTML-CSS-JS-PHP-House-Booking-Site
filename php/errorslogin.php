<?php  if (count($errorslogin) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorslogin as $errorl) : ?>
  	  <i class="err"><?php echo $errorl ?></i>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
