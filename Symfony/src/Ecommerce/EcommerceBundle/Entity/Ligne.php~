<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligne
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Entity\LigneRepository")
 */
class Ligne
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
    * @ORM\ManyToOne(targetEntity="Commande" , inversedBy="Ligne_Commandes", cascade={"remove"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $commande;

    /**
    * @ORM\ManyToOne(targetEntity="Ecommerce\EcommerceBundle\Entity\Produit" , inversedBy="ligneCommandes", cascade={"remove"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $Produit;







    /**
     * @var float
     *
     * @ORM\Column(name="prixTP", type="float")
     */
    private $prixTP;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantiteP", type="integer")
     */
    private $quantiteP;


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
     * Set prixTP
     *
     * @param float $prixTP
     *
     * @return Ligne
     */
    public function setPrixTP($prixTP)
    {
        $this->prixTP = $prixTP;

        return $this;
    }

    /**
     * Get prixTP
     *
     * @return float
     */
    public function getPrixTP()
    {
        return $this->prixTP;
    }

    /**
     * Set quantiteP
     *
     * @param integer $quantiteP
     *
     * @return Ligne
     */
    public function setQuantiteP($quantiteP)
    {
        $this->quantiteP = $quantiteP;

        return $this;
    }

    /**
     * Get quantiteP
     *
     * @return integer
     */
    public function getQuantiteP()
    {
        return $this->quantiteP;
    }

    /**
     * Set commande
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Commande $commande
     *
     * @return Ligne
     */
    public function setCommande(\Ecommerce\EcommerceBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produit
     *
     * @return Ligne
     */
    public function setProduit(\Ecommerce\EcommerceBundle\Entity\Produit $produit = null)
    {
        $this->Produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->Produit;
    }
}
