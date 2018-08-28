<?php
namespace Ecommerce\EcommerceBundle\Form;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


class rechercheType extends AbstractType{

  public function buildForm(FormbuilderInterface $builder, array $option)
     {
         $builder->add('recherche','text', array('label' => false,
                                                 'attr' => array('class' => 'form-control', 'placeholder' => 'Chercher votre produit')));
     }

     public function getName()
     {
         return 'ecommerce_ecommercebundle_recherche';
     }


}
