<?php

namespace Utilisateurs\UtilisateurBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Utilisateurs")
*/
class Utilisateurs extends BaseUser
{
   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   protected $id;



   protected $cmds;

   public function __construct()
   {
       parent::__construct();
       // your own logic
        $this->cmds = new \Doctrine\Common\Collections\ArrayCollection();
         $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
   }

   /**
   * @ORM/OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Commande", mappedBy="utilisateur", cascade={"remove", "persist"})
  * @ORM\JoinColumn(nullable=true)
   */

   /**
 * @ORM\OneToMany(targetEntity="Ecommerce\EcommerceBundle\Entity\Adresse", mappedBy="utilisateur", cascade={"remove"})
* @ORM\JoinColumn(nullable=true)
 */
    protected $adresses;



    /**
     * Add adress
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Adresse $adresses
     *
     * @return Utilisateurs
     */
    public function addAdress(\Ecommerce\EcommerceBundle\Entity\Adresse $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Adresse $adress
     */
    public function removeAdress(\Ecommerce\EcommerceBundle\Entity\Adresse $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
