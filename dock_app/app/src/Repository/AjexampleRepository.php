<?php

namespace App\Repository;

use App\Entity\Ajexample;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ajexample|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ajexample|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ajexample[]    findAll()
 * @method Ajexample[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AjexampleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ajexample::class);
    }

    // /**
    //  * @return Ajexample[] Returns an array of Ajexample objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ajexample
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
