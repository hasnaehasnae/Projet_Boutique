<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Image_PD;
use Ecommerce\EcommerceBundle\Form\rechercheType;

class ProduitController extends Controller
{
    public function produitsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produit')->findAll();

          return $this->render('EcommerceBundle:Default:Produit/produits.html.twig', array('produits' => $produits));
    }

    public function categoriesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $Categories = $em->getRepository('EcommerceBundle:Categorie')->findAll();


          return $this->render('EcommerceBundle:Default:Produit/Categorie.html.twig', array('categories' => $Categories));
    }

    public function categorieProdAction($categorie)
      {
          $em = $this->getDoctrine()->getManager();
          $produits = $em->getRepository('EcommerceBundle:Produit')->byCategorie($categorie);

          return $this->render('EcommerceBundle:Default:Produit/produits.html.twig', array('produits' => $produits));
      }

  public function rechercheAction()
          {
              $form = $this->createForm(new rechercheType());
              return $this->render('EcommerceBundle:Default:Produit/recherche.html.twig', array('form' => $form->createView()));
          }

  public function rechercheTraitementAction()
             {
                 $form = $this->createForm(new rechercheType());

                 if ($this->get('request')->getMethod() == 'POST')
                 {
                     $form->bind($this->get('request'));
                     $em = $this->getDoctrine()->getManager();
                     $produits = $em->getRepository('EcommerceBundle:Produit')->recherche($form['recherche']->getData());
                 } else {
                     throw $this->createNotFoundException('La page n\'existe pas.');
                 }

                 return $this->render('EcommerceBundle:Default:produit/produits.html.twig', array('produits' => $produits));
             }


   public function listAction($page)
               {
                   $nbArticlesParPage = $this->container->getParameter('front_nb_articles_par_page');

                   $em = $this->getDoctrine()->getManager();

                   $articles = $em->getRepository('EcommerceBundle:Produit')
                       ->findAllPagineEtTrie($page, $nbArticlesParPage);

                   $pagination = array(
                       'page' => $page,
                       'nbPages' => ceil(count($articles) / $nbArticlesParPage),
                       'nomRoute' => 'Produit_list',
                       'paramsRoute' => array()
                   );

           return $this->render('EcommerceBundle:Default:produit/test.html.twig', array(
               'produits' => $articles,
               'pagination' => $pagination
           ));

               }

  public function identificationAction(){
                if (!is_object( $this->container->get('security.context')->getToken()->getUser())) {
                  $connecte=0;
                }else{
                      $connecte=1;
                }

  return $this->render('EcommerceBundle:Default:Produit/connexion.html.twig', array('connecte' => $connecte));
}


}
