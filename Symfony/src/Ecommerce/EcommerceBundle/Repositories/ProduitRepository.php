<?php

namespace Ecommerce\EcommerceBundle\Repositories;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends \Doctrine\ORM\EntityRepository
{
  public function byCategorie($categorie)
   {
       $q = $this->createQueryBuilder('p')
               ->select('p')
               ->where('p.categorie = :categorie')
               ->orderBy('p.id')
               ->setParameter('categorie', $categorie);
       return $q->getQuery()->getResult();
   }
   public function recherche($chaine)
    {
     $q=$this->_em->createQuery("select p from EcommerceBundle:Produit p  where p.designationP LIKE :designation and p.qtStock > 0 order By p.id ")->setParameter('designation', '%'.$chaine.'%');
return $q->getResult();
    }
public function findArray($tableau){
  $q=$this->createQueryBuilder('p')
     ->select('p')
     ->where('p.id IN (:tableau)')
     ->setParameter('tableau',$tableau);
     return $q->getQuery()->getResult();

}

 public  function countPublishedTotal(){
   return $this->createQueryBuilder('p')
            ->select('count(p.id)')
            ->getQuery()
            ->getSingleScalarResult();
}
/**
     * Récupère une liste d'articles triés et paginés.
     *
     * @param int $page Le numéro de la page
     * @param int $nbMaxParPage Nombre maximum d'article par page
     *
     * @throws InvalidArgumentException
     * @throws NotFoundHttpException
     *
     * @return Paginator
     */
    public function findAllPagineEtTrie($page, $nbMaxParPage)
    {
        if (!is_numeric($page)) {
            throw new InvalidArgumentException(
                'La valeur de l\'argument $page est incorrecte (valeur : ' . $page . ').'
            );
        }

        if ($page < 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas');
        }

        if (!is_numeric($nbMaxParPage)) {
            throw new InvalidArgumentException(
                'La valeur de l\'argument $nbMaxParPage est incorrecte (valeur : ' . $nbMaxParPage . ').'
            );
        }

        $qb = $this->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC');

        $query = $qb->getQuery();

        $premierResultat = ($page - 1) * $nbMaxParPage;
        $query->setFirstResult($premierResultat)->setMaxResults($nbMaxParPage);
        $paginator = new Paginator($query);

        if ( ($paginator->count() <= $premierResultat) && $page != 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }

        return $paginator;
    }
}
