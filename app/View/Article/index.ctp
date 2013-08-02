<?php
$this->Html->css('screen', null, array('inline' => false));
?>

<div class="newsList">
    <ul></ul>
</div>
<div class="meaContent">
    <?php foreach ($articles02 as $d): ?>
    <div class="art">
        <br class="clear">
        <div class="illus"><a href="#"><img src="<?php echo $d['Article']['largeImg']; ?>"></a></div>
        <div class="contArticle">
        <h2><?php echo $this->Html->link($d['Article']['title'],
        array('controller' => 'articles', 'action' => 'view', $d['Article']['id'])); ?></h2>
        <span class="createSpan"><?php echo $d['Article']['created']; ?></span>
        <p><?php echo $d['Article']['largeIntro']; ?></p>
        <a class="follow" href="#">En savoir plus</a>
    </div><br class="clear">
    </div>
  
    <?php endforeach; ?><br class="clear">
    </div>  
    <!-- Here is where we loop through our $posts array, printing out post info -->
<div class="articleContent">
    <h2>HOT NEWS</h2>
    <?php $count = 0; ?>
    <?php foreach ($articles as $ar): ?>
    <div class="art <?php echo (++$count%2 ? "" : "last"); ?> ">
        <br class="clear">
        <div class="illus"><a href="#"><img src="<?php echo $ar['Article']['image2']; ?>"></a></div>
        <div class="contArticle">
        <h2><?php echo $this->Html->link($ar['Article']['title'],
        array('controller' => 'articles', 'action' => 'view', $ar['Article']['id'])); ?></h2>
        <span class="createSpan"><?php echo $ar['Article']['created']; ?></span>
        <p><?php echo $ar['Article']['intro']; ?></p>
         <a class="follow" href="#">En savoir plus</a>
    </div>
    </div>
  
    <?php endforeach; ?><br class="clear">
    </div>  
    <?php unset($ar); ?>
