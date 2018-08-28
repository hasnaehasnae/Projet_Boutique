<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Ecommerce\EcommerceBundle\Entity\Produit;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProduitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
             $Produit1= new Produit();
             $Produit1-> setDesignationP('Produir1');
             $Produit1-> setPrix(10);
             $Produit1->setInCatalogue(true);
             $Produit1->setInPromotion(true);
             $Produit1->setQtStock(100);
             $Produit1->setTauxRemise(0.02);
             $Produit1->setBoutique($this->getReference('Boutique1'));
             $Produit1->setCategorie($this->getReference('Categorie1'));
             $manager->persist( $Produit1);

              $Produit2= new Produit();
              $Produit2-> setDesignationP('Produir2');
              $Produit2-> setPrix(10);
              $Produit2->setInCatalogue(true);
              $Produit2->setInPromotion(true);
              $Produit2->setQtStock(100);
              $Produit2->setTauxRemise(0.02);
              $Produit2->setBoutique($this->getReference('Boutique2'));
              $Produit1->setCategorie($this->getReference('Categorie2'));
              $manager->persist( $Produit2);


           $manager->flush();

           $this->addReference('Produit1', $Produit1 );
          $this->addReference('Produit2', $Produit2 );

    }

    public function getOrder()
      {
          return 3;
      }


}
