<?php

/**
 * Our homepage. Show the most recently added quote.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
	$this->data['pagebody'] = 'justone';    // this is the view we want shown
	//$this->data = array_merge($this->data, (array) $this->quotes->last());
        
        //Get a random quote to display
        $choice = rand(1,$this->quotes->size());
        $this->data = array_merge($this->data, (array) $this->quotes->get($choice)); 

        //set up the rating widget
        $this->caboose->needed('jrating','hollywood');
        $this->average();
	$this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */