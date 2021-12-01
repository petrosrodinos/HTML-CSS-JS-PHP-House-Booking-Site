<?php  if (count($errorsemail) > 0) : ?>
  <div class="errorsemail">
  	<?php foreach ($errorsemail as $error2) : ?>
  	  <i class="err"><?php echo $error2 ?></i>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
