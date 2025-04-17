<?php

namespace App\Repository\gestion_de_depence;

use App\Entity\gestion_de_depence\Statistiques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Statistiques>
 *
 * @method Statistiques|null find($id, $lockMode = null, $lockVersion = null)
 * @method Statistiques|null findOneBy(array $criteria, array $orderBy = null)
 * @method Statistiques[]    findAll()
 * @method Statistiques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Statistiques::class);
    }

    public function save(Statistiques $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Statistiques $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}