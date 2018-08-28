<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceBundle:Default:index.html.twig');
    }

    public function page2Action($name)
    {
        return $this->render('EcommerceBundle:Default:page2.html.twig', array('name' => $name));
    }


}
