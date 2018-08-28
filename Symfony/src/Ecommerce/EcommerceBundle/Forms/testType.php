<?php

namespace Ecommerce\EcommerceBundle\Forms;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class testType extends AbstractType
{
  public function buildform(FormBuilderInterface $builder,array $option ){

    $builder->add('email','email', array('required'=>false))
             ->add('nom', 'email')
             ->add('llll', 'textarea')
            
             ->add('date','date')
             ->add('go','submit');
    ;

  }


  public function getName(){
return '' ;
  }
}
