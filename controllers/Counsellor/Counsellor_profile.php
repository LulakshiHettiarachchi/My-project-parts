<?php
class Counsellor_profile extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Counsellor_profile()
    {

        //pass view name
        $this->view->render('Counsellor_profile');
    }
}
