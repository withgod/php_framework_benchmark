<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
		//Zend_Controller_Front::getInstance()->setParam('noViewRenderer', true);
		echo 'hello word';
    }


}

