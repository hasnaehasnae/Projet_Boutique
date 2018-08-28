<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Utilisateur;
use Ecommerce\EcommerceBundle\Forms\testType;


class TestController extends Controller
{

  public function TestformAction(){

    $form=$this->createForm(new testType());


    if($this->get('request')->getMethod() == POST ){

  die('ici');
    }
    return $this->render('EcommerceBundle:Default:page2.html.twig',array('form'=> $form->createView()));
  }
/*
    public function AjoutAction($name)
    {
                         $em= $this->getDoctrine()->getManager();

      $utilisateur= new Utilisateur();
        $utilisateur->setNom("hachimi");
        $utilisateur->setPrenom("hasnae");

        $em->persist($utilisateur);
        $em->flush();

      $utilisateurs=$em->getRepository('EcommerceBundle:Utilisateur')->findAll();

        return $this->render('EcommerceBundle:Default:page2.html.twig', array('name' => $name , 'utilisateurs' => $utilisateurs));
    }

*/


}
