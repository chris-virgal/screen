<?php
$this->Html->css('screen', null, array('inline' => false));
?>


    <!-- Here is where we loop through our $posts array, printing out post info -->
<div class="articleContent">
    <?php foreach ($articles as $ar): ?>
    <div class="art">
        <br class="clear">
        <div class="illus"><img src="<?php echo $ar['Article']['image2']; ?>"></div>
        <div class="contArticle">
        <h2><?php echo $this->Html->link($ar['Article']['title'],
        array('controller' => 'articles', 'action' => 'view', $ar['Article']['id'])); ?></h2>
        <span class="createSpan"><?php echo $ar['Article']['created']; ?></span>
        <p><?php echo $ar['Article']['desc']; ?></p>
    </div><br class="clear">
    </div>
  
    <?php endforeach; ?>
    </div>  
    <?php unset($ar); ?>
