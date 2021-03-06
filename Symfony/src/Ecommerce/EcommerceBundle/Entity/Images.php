<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Images
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Repositories\ImagesRepository")
 */
class Images
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
    * @ORM\ManyToOne(targetEntity="Produit", inversedBy="images", cascade={"remove"})
    * @ORM\JoinColumn(nullable=true)
    */
     private $produit;

    /**
     * @var string
     *
     * @ORM\Column(name="url1", type="string", length=255)
     */
    private $url1;

    /**
     * @var string
     *
     * @ORM\Column(name="url2", type="string", length=255)
     */
    private $url2;


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
     * Set url1
     *
     * @param string $url1
     *
     * @return Images
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;

        return $this;
    }

    /**
     * Get url1
     *
     * @return string
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * Set url2
     *
     * @param string $url2
     *
     * @return Images
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;

        return $this;
    }

    /**
     * Get url2
     *
     * @return string
     */
    public function getUrl2()
    {
        return $this->url2;
    }

    /**
     * Set produit
     *
     * @param \Ecommerce\EcommerceBundle\Entity\Produit $produit
     *
     * @return Images
     */
    public function setProduit(\Ecommerce\EcommerceBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Ecommerce\EcommerceBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

  
}
