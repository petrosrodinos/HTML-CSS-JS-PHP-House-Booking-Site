<?php  if (count($errorscomment) > 0) : ?>
  <div class="errorscomment">
  	<?php foreach ($errorscomment as $errorl) : ?>
  	  <i class="err"><?php echo $errorl ?></i>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
