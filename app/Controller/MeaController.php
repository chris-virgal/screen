<?php
class MeaController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('mea', $this->Mea->find('all'));
    }
}