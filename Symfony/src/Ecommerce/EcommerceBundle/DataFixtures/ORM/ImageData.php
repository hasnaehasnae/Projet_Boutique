<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Ecommerce\EcommerceBundle\Entity\Images;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ImageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

            $Image_PD1 = new Images();
            $Image_PD1-> setUrl1('image2D');
            $Image_PD1-> setUrl2('image3D');
            $Image_PD1-> setProduit($this->getReference('Produit1'));
            $Image_PD1->setCategorie($this->getReference('Categorie1'));
            $manager->persist($Image_PD1);

            $Image_PD2 = new Images();
            $Image_PD2-> setUrl1('image2D2');
            $Image_PD2-> setUrl2('image3D3');
            $Image_PD2-> setProduit($this->getReference('Produit2'));
            $Image_PD2->setCategorie($this->getReference('Categorie2'));
            $manager->persist($Image_PD2);



        $manager->flush();

        $this->addReference('Image1', $Image_PD1 );
        $this->addReference('Image2', $Image_PD2);

    }

    public function getOrder()
      {
          return 4;
      }




}
