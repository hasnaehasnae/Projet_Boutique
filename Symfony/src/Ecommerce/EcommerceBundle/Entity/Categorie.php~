<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repositories\CategorieRepository")
 */
class Categorie
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
    * @ORM\OneToMany(targetEntity="Produit", mappedBy="categorie", cascade={"remove", "persist"})
    */
    private $produitss;

    /**
    * @ORM\OneToMany(targetEntity="Images", mappedBy="categorie", cascade={"remove", "persist"})
    */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="designation_C", type="string", length=100)
     */
    private $designationC;


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
     * Set designationC
     *
     * @param string $designationC
     *
     * @return Categorie
     */
    public function setDesignationC($designationC)
    {
        $this->designationC = $designationC;

        return $this;
    }

    /**
     * Get designationC
     *
     * @return string
     */
    public function getDesignationC()
    {
        return $this->designationC;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produitss = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * Add produitss
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produitss
     *
     * @return Categorie
     */
    public function addProduitss(\Ecommerce\EcommerceBundle\Entity\Produit $produitss)
    {
        $this->produitss[] = $produitss;

        return $this;
    }

    /**
     * Remove produitss
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produitss
     */
    public function removeProduitss(\Ecommerce\EcommerceBundle\Entity\Produit $produitss)
    {
        $this->produitss->removeElement($produitss);
    }

    /**
     * Get produitss
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduitss()
    {
        return $this->produitss;
    }



    /**
     * Add image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Images $image
     *
     * @return Categorie
     */
    public function addImage(\Ecommerce\EcommerceBundle\Entity\Images $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Images $image
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
}
