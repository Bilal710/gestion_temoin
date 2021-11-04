<?php

namespace App\Repository;

use App\Entity\Enseigner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enseigner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enseigner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enseigner[]    findAll()
 * @method Enseigner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnseignerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enseigner::class);
    }

    // /**
    //  * @return Enseigner[] Returns an array of Enseigner objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Enseigner
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
