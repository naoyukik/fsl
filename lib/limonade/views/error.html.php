  <h1>asa<?php echo h(error_http_status($errno));?></h1>
  <?php if($is_http_error): ?>
  <p><?php echo h($errstr); echo $errno ."sfsddsf";?></p>
  <?php endif; ?>
  
  <?php echo  render('_debug.html.php', null, $vars); ?>