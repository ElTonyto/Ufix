<?php

namespace App\Repository;

use App\Entity\RepairProposition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RepairProposition|null find($id, $lockMode = null, $lockVersion = null)
 * @method RepairProposition|null findOneBy(array $criteria, array $orderBy = null)
 * @method RepairProposition[]    findAll()
 * @method RepairProposition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RepairPropositionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RepairProposition::class);
    }

    // /**
    //  * @return RepairProposition[] Returns an array of RepairProposition objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RepairProposition
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
