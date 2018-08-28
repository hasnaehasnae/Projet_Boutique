<?php
namespace Ecommerce\EcommerceBundle\FixtureDonnésamp\ORM;

use Utilisateurs\UtilisateurBundle\Entity\Utilisateurs;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UtilisateurData extends AbstractFixture implements OrderedFixtureInterface, FixtureInterface, ContainerAwareInterface
{

  private $container;

      public function setContainer(ContainerInterface $container = null)
      {
          $this->container = $container;
      }

    public function load(ObjectManager $manager)
    {
      $utilisateur1 = new Utilisateurs();
         $utilisateur1->setUsername('benjamin');
         $utilisateur1->setEmail('benjamin@gmail.com');
         $utilisateur1->setEnabled(1);
         $utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur1)->encodePassword('poupou', $utilisateur1->getSalt()));
         $manager->persist($utilisateur1);

         $utilisateur2 = new Utilisateurs();
         $utilisateur2->setUsername('mathilde');
         $utilisateur2->setEmail('mathilde@gmail.com');
         $utilisateur2->setEnabled(1);
         $utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($utilisateur2)->encodePassword('mathilde', $utilisateur2->getSalt()));
         $manager->persist($utilisateur2);



      $manager->flush();

      $this->addReference('Utilisateur1', $utilisateur1 );
      $this->addReference('Utilisateur2', $utilisateur2);


    }


    public function getOrder()
      {
          return 5;
      }
  }
