<?php

namespace App\Repository\Gestion_evenement;

use App\Entity\Gestion_Evenement\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenement>
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    //    /**
    //     * @return Evenement[] Returns an array of Evenement objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Evenement
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    // src/Repository/EvenementRepository.php

   
    
   public function findBySearchCriteria(?string $nom, ?string $lieu, string $ordre): array
   {
       $qb = $this->createQueryBuilder('e');

       if ($nom) {
           $qb->andWhere('e.nom LIKE :nom')
              ->setParameter('nom', '%' . $nom . '%');
       }

       if ($lieu) {
           $qb->andWhere('e.lieuEvenement LIKE :lieu')
              ->setParameter('lieu', '%' . $lieu . '%');
       }

       $qb->orderBy('e.nom', $ordre);

       return $qb->getQuery()->getResult();
   }


}