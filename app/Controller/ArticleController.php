<?php
class ArticleController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('articles', $this->Article->find('all',
        	array('order' =>array('Article.id ASC'),
        		'limit' => 4,
        		)));
          $this->set('articles02', $this->Article->find('all',
        	array('order' =>array('Article.created DESC'),
        		'limit' => 1
        		)));
    }
}