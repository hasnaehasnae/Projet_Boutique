<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ecommerce\EcommerceBundle\Entity\Adresse;
use Ecommerce\EcommerceBundle\Form\AdresseType;

class PanierController extends Controller
{
  public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1;

            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $session->set('panier',$panier);


        return $this->redirect($this->generateUrl('panier'));
    }

    public function menuAction()
    {
        $session = $this->getRequest()->getSession();
          $produits=NULL;
        if (!$session->has('panier')){
            $articles = 0;}
        else{
            $articles =count($session->get('panier'));

            $em=$this->getDoctrine()->getManager();
            $produits=$em->getRepository('EcommerceBundle:Produit')->findArray(array_keys($session->get('panier')));
          }
        return $this->render('EcommerceBundle:Default:Produit/navPanier.html.twig', array('articles' => $articles,
                                      'panier' => $session->get('panier'),'produits' => $produits )  );

    }


public function supprimerAction($id){

  $session=$this->getRequest()->getSession();
  $panier=$session->get('panier');

  if (array_key_exists($id, $panier))
  {
  unset($panier[$id]);
  $session->set('panier',$panier);
  $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
}
              return $this->redirect($this->generateUrl('panier'));
}

public function PanierAction(){
  $session=$this->getRequest()->getSession();
  if(!$session->has('panier')) $session->set('panier',array());

  $em=$this->getDoctrine()->getManager();
  $produits=$em->getRepository('EcommerceBundle:Produit')->findArray(array_keys($session->get('panier')));
  return $this->render('EcommerceBundle:Default:produit/panier.html.twig', array('produits' => $produits,
                                                              'panier' => $session->get('panier')));
  }

 public function livraisonTraitementAction(){
   $utilisteur=$this->container->get('security.context')->getToken()->getUser();
   $adresse=new Adresse();
   $form=$this->createForm(new AdresseType(), $adresse);
   if($this->get('request')->getMethod() == 'POST'){
      $form->handleRequest($this->getRequest());
      if($form->isValid() ){
    $em=$this->getDoctrine()->getManager();
    $adresse->setUtilisateur($utilisteur);
    $em->persist($adresse);
    $em->flush();
    return $this->redirect($this->generateUrl('livraison'));
  }
   }
   return $this->render('EcommerceBundle:Default:Produit/livraison.html.twig', array('utilisateur' => $utilisteur,
                                                                                              'form' => $form->createView()));
 }

public  function livraisonSession(){
  $session=$this-> getRequest()->getSession();
  if(!$session->has('adresse')){  $session->set('adresse',array()); }
  $adresse=$session->get('adresse');
  if($this->getRequest()->request->get('livraison')!= null){
      $adresse['livraison']=$this->getRequest()->request->get('livraison');
  }else {
            return $this->redirect($this->generateUrl('validation'));
        }
        $session->set('adresse',$adresse);
             return $this->redirect($this->generateUrl('validation'));
}

public function validationTraitementAction()
   {
 if ($this->get('request')->getMethod() == 'POST')
           $this->livraisonSession();

 $em = $this->getDoctrine()->getManager();
 $session = $this->getRequest()->getSession();
 $adresse = $session->get('adresse');

     $produits = $em->getRepository('EcommerceBundle:Produit')->findArray(array_keys($session->get('panier')));
     $livraison =$em->getRepository('EcommerceBundle:Adresse')->find($adresse['livraison']);

   return $this->render('EcommerceBundle:Default:Produit/validation.html.twig', array('produits' => $produits,
                                                                                      'livraison' => $livraison,
                                                                            'panier' => $session->get('panier')));
   }

public function suppressionAdresseAction($id){
  $em=$this->getDoctrine()->getManager();
  $adresse=$em->getRepository('EcommerceBundle:Adresse')->find($id);
   if ($this->container->get('security.context')->getToken()->getUser() != $adresse->getUtilisateur() || !$adresse)
           return $this->redirect ($this->generateUrl ('livraison'));
       $em->remove($adresse);
       $em->flush();

       return $this->redirect ($this->generateUrl ('livraison'));

}

}
