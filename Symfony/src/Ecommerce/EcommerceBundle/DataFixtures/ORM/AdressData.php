<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Ecommerce\EcommerceBundle\Entity\Adresse;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AdressData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

            $Adresse1 = new Adresse();
              $Adresse1->setDescription('adresse1');
              $Adresse1->setVille('ville1');
              $Adresse1->setPays('pays1');
              $Adresse1->setCodePostal('codep1');
              $Adresse1->setUtilisateur($this->getReference('Utilisateur1'));
            $manager->persist($Adresse1);

            $Adresse2 = new Adresse();
            $Adresse2->setDescription('adresse2');
            $Adresse2->setVille('ville2');
            $Adresse2->setPays('pays2');
            $Adresse2->setCodePostal('codep1');
            $Adresse2->setUtilisateur($this->getReference('Utilisateur2'));
            $manager->persist($Adresse2);


        $manager->flush();

        $this->addReference('Adresse1',$Adresse1 );
        $this->addReference('Adresse2',$Adresse2);

    }

    public function getOrder()
      {
          return 8;
      }




}
