<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Ecommerce\EcommerceBundle\Entity\Categorie;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CategorieData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

      $Categorie1 = new Categorie();
      $Categorie1-> setDesignationC('Categorie1');
      $manager->persist($Categorie1);

      $Categorie2 = new Categorie();
      $Categorie2-> setDesignationC('Categorie2');
      $manager->persist($Categorie2);

  $manager->flush();
  $this->addReference('Categorie1',$Categorie1 );
  $this->addReference('Categorie2',$Categorie2 );
    }
      public function getOrder(){
             return 2;
      }

    }
