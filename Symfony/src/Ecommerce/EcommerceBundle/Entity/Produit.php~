<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table("produit")
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repositories\ProduitRepository")
 */
class Produit
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
    * @ORM\OneToMany(targetEntity="Images", mappedBy="produit", cascade={"remove"})
    * @ORM\JoinColumn(nullable=true)
    */
     private   $images;


    /**
    * @ORM\ManyToOne(targetEntity="Boutique", inversedBy="produits", cascade={"remove"})
    * @ORM\JoinColumn(nullable=true)
    */
     private   $boutique;
     /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="produitss", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
        private $categorie;
     /**


    /**
     * @var string
     *
     * @ORM\Column(name="designation_P", type="string", length=70)
     */
    private $designationP;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_Catalogue", type="boolean")
     */
    private $inCatalogue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="in_Promotion", type="boolean")
     */
    private $inPromotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="qt_Stock", type="integer")
     */
    private $qtStock;



    /**
     * @var float
     *
     * @ORM\Column(name="tauxRemise", type="float")
     */
    private $tauxRemise;


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
     * Set designationP
     *
     * @param string $designationP
     *
     * @return Produit
     */
    public function setDesignationP($designationP)
    {
        $this->designationP = $designationP;

        return $this;
    }

    /**
     * Get designationP
     *
     * @return string
     */
    public function getDesignationP()
    {
        return $this->designationP;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set inCatalogue
     *
     * @param boolean $inCatalogue
     *
     * @return Produit
     */
    public function setInCatalogue($inCatalogue)
    {
        $this->inCatalogue = $inCatalogue;

        return $this;
    }

    /**
     * Get inCatalogue
     *
     * @return boolean
     */
    public function getInCatalogue()
    {
        return $this->inCatalogue;
    }

    /**
     * Set inPromotion
     *
     * @param boolean $inPromotion
     *
     * @return Produit
     */
    public function setInPromotion($inPromotion)
    {
        $this->inPromotion = $inPromotion;

        return $this;
    }

    /**
     * Get inPromotion
     *
     * @return boolean
     */
    public function getInPromotion()
    {
        return $this->inPromotion;
    }

    /**
     * Set qtStock
     *
     * @param integer $qtStock
     *
     * @return Produit
     */
    public function setQtStock($qtStock)
    {
        $this->qtStock = $qtStock;

        return $this;
    }

    /**
     * Get qtStock
     *
     * @return integer
     */
    public function getQtStock()
    {
        return $this->qtStock;
    }






    /**
     * Set tauxRemise
     *
     * @param float $tauxRemise
     *
     * @return Produit
     */
    public function setTauxRemise($tauxRemise)
    {
        $this->tauxRemise = $tauxRemise;

        return $this;
    }

    /**
     * Get tauxRemise
     *
     * @return float
     */
    public function getTauxRemise()
    {
        return $this->tauxRemise;
    }

    /**
     * Set boutique
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Boutique $boutique
     *
     * @return Produit
     */
    public function setBoutique(\Ecommerce\EcommerceBundle\Entity\Boutique $boutique = null)
    {
        $this->boutique = $boutique;

        return $this;
    }

    /**
     * Get boutique
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Boutique
     */
    public function getBoutique()
    {
        return $this->boutique;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Image $image
     *
     * @return Produit
     */
    public function addImage(\Ecommerce\EcommerceBundle\Entity\Images $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Image $image
     */
    public function removeImage(\Ecommerce\EcommerceBundle\Entity\Images $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }


    /**
     * Set categorie
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Categorie $categorie
     *
     * @return Produit
     */
    public function setCategorie(\Ecommerce\EcommerceBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Get ligneCommande
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLigneCommande()
    {
        return $this->ligne_Commande;
    }


}
