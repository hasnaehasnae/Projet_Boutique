<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repositories\BoutiqueRepository")
 */
class Boutique
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
* @ORM\OneToMany(targetEntity="Produit", mappedBy="boutique", cascade={"remove", "persist"})
*/
protected $produits;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_B", type="string", length=100)
     */
    private $nomB;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_B", type="string", length=160)
     */
    private $adresseB;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100)
     */
    private $ville;


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
     * Set nomB
     *
     * @param string $nomB
     *
     * @return Boutique
     */
    public function setNomB($nomB)
    {
        $this->nomB = $nomB;

        return $this;
    }

    /**
     * Get nomB
     *
     * @return string
     */
    public function getNomB()
    {
        return $this->nomB;
    }

    /**
     * Set adresseB
     *
     * @param string $adresseB
     *
     * @return Boutique
     */
    public function setAdresseB($adresseB)
    {
        $this->adresseB = $adresseB;

        return $this;
    }

    /**
     * Get adresseB
     *
     * @return string
     */
    public function getAdresseB()
    {
        return $this->adresseB;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Boutique
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produit
     *
     * @return Boutique
     */
    public function addProduit(\Ecommerce\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produits[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produit
     */
    public function removeProduit(\Ecommerce\EcommerceBundle\Entity\Produit $produit)
    {
        $this->produits->removeElement($produit);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }
}
