<?php
class View_contract extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function View_contract()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('View_contract'); 
        
    }
}