<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Ecommerce\EcommerceBundle\Entity\Commande;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class CommendeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

            $Commande1 = new Commande();
            $Commande1 -> setTotaleC(270);
            $Commande1 ->setDateC(new \DateTime());
            $Commande1 ->setUtilisateur($this->getReference('Utilisateur1'));
            $manager->persist($Commande1);

            $Commande2  = new Commande();
            $Commande2 -> setTotaleC(550);
            $Commande2 -> setDateC(new \DateTime());
            $Commande2 -> setUtilisateur($this->getReference('Utilisateur2'));
            $manager->persist($Commande2 );


        $manager->flush();

        $this->addReference('Commande1',$Commande1 );
        $this->addReference('Commande2',$Commande2);

    }

    public function getOrder()
      {
          return 6;
      }




}
