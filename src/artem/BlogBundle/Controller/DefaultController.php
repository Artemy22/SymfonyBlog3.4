<?php

namespace artem\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('artemBlogBundle:Default:index.html.twig');
    }
}
