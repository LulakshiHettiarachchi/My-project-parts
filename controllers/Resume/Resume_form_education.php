<?php
class Resume_form_education extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_form_education()
    {

        //pass view name
        $this->view->render('Resume_form_education');
    }
}
