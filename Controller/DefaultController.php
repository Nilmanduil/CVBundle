<?php

namespace Nilmanduil\CVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NilmanduilCVBundle:Default:index.html.twig', array('name' => $name));
    }
}
