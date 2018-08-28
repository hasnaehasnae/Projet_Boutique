<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Ecommerce\EcommerceBundle\Entity\Boutique;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class boutiqueData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

            $Boutique1 = new Boutique();
            $Boutique1-> setNomB('Boutique1');
            $Boutique1-> setAdresseB('Adresse1');
            $Boutique1-> setVille('ville');
            $manager->persist($Boutique1);

            $Boutique = new Boutique();
            $Boutique-> setNomB('Boutique2');
            $Boutique-> setAdresseB('Adresse2');
            $Boutique-> setVille('ville2');
            $manager->persist($Boutique);


        $manager->flush();

        $this->addReference('Boutique1',$Boutique1 );
        $this->addReference('Boutique2',$Boutique);

    }

    public function getOrder()
      {
          return 1;
      }




}
