<?php  if (count($errorsregister) > 0) : ?>
  <div class="error">
  	<?php foreach ($errorsregister as $errorr) : ?>
  	  <i class="err"><?php echo $errorr ?></i></br>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
