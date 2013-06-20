<?php
$this->Html->css('screen', null, array('inline' => false));
?>



    <!-- Here is where we loop through our $posts array, printing out post info -->
<div class="articleContent">
    <?php foreach ($articles as $ar): ?>
    <div>
        <h2><?php echo $this->Html->link($ar['Article']['title'],
        array('controller' => 'articles', 'action' => 'view', $ar['Article']['id'])); ?></h2><br class="clear">
      
        <p><?php echo $ar['Article']['desc']; ?></p>
    </div>
  
    <?php endforeach; ?>
    </div>  
    <?php unset($ar); ?>
