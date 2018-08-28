<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repositories\CommandeRepository")
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

      /**
      * @ORM\ManyToOne(targetEntity="Utilisateurs\UtilisateurBundle\Entity\Utilisateurs", inversedBy="cmds", cascade={"remove"})
      * @ORM\JoinColumn(nullable=true)
      */
    private $utilisateur;
    /**
    * @ORM\OneToMany(targetEntity="Ligne", mappedBy="commande", cascade={"remove", "persist"})
    */
     private  $Ligne_Commandes;

    /**
     * @var float
     *
     * @ORM\Column(name="totale_C", type="float")
     */
    private $totaleC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_C", type="date")
     */
    private $dateC;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set totaleC
     *
     * @param float $totaleC
     *
     * @return Commande
     */
    public function setTotaleC($totaleC)
    {
        $this->totaleC = $totaleC;

        return $this;
    }

    /**
     * Get totaleC
     *
     * @return float
     */
    public function getTotaleC()
    {
        return $this->totaleC;
    }

    /**
     * Set dateC
     *
     * @param \DateTime $dateC
     *
     * @return Commande
     */
    public function setDateC($dateC)
    {
        $this->dateC = $dateC;

        return $this;
    }

    /**
     * Get dateC
     *
     * @return \DateTime
     */
    public function getDateC()
    {
        return $this->dateC;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Ligne_Commandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ligneCommande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Ligne_Commande $ligneCommande
     *
     * @return Commande
     */
    public function addLigneCommande(\Ecommerce\EcommerceBundle\Entity\Ligne $ligneCommande)
    {
        $this->Ligne_Commandes[] = $ligneCommande;

        return $this;
    }

    /**
     * Remove ligneCommande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Ligne_Commande $ligneCommande
     */
    public function removeLigneCommande(\Ecommerce\EcommerceBundle\Entity\Ligne $ligneCommande)
    {
        $this->Ligne_Commandes->removeElement($ligneCommande);
    }

    /**
     * Get ligneCommandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLigneCommandes()
    {
        return $this->Ligne_Commandes;
    }

    /**
     * Set utilisateur
     *
     * @param \Utilisateurs\UtilisateurBundle\Entity\Utilisateurs $utilisateur
     *
     * @return Commande
     */
    public function setUtilisateur(\Utilisateurs\UtilisateurBundle\Entity\Utilisateurs $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Utilisateurs\UtilisateurBundle\Entity\Utilisateurs
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}
