<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Ecommerce\EcommerceBundle\Entity\Ligne;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LigneComData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

      $LigneCommande1 = new Ligne();
      $LigneCommande1-> setPrixTP(80);
      $LigneCommande1-> setQuantiteP(5);
      $LigneCommande1-> setCommande($this->getReference('Commande1'));
      $LigneCommande1-> setProduit($this->getReference('Produit1'));
      $manager->persist($LigneCommande1);

      $LigneCommande2 = new Ligne();
      $LigneCommande2-> setPrixTP(80);
      $LigneCommande2-> setQuantiteP(4);
      $LigneCommande2-> setCommande($this->getReference('Commande2'));
      $LigneCommande1-> setProduit($this->getReference('Produit2'));
      $manager->persist($LigneCommande2);

      $manager->flush();
      //$this->addReference('LigneCommande1', $LigneCommande1 );
    //  $this->addReference('LigneCommande1', $LigneCommande2);

}

public function getOrder(){
                              return 7;
}

}
