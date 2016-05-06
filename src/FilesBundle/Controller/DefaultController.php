<?php

namespace FilesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FilesBundle:Default:index.html.twig', array('name' => $name));
    }
}
