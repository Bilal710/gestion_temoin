<?php

namespace App\Repository;

use App\Entity\NiveauEnseignement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NiveauEnseignement|null find($id, $lockMode = null, $lockVersion = null)
 * @method NiveauEnseignement|null findOneBy(array $criteria, array $orderBy = null)
 * @method NiveauEnseignement[]    findAll()
 * @method NiveauEnseignement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NiveauEnseignementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NiveauEnseignement::class);
    }

    // /**
    //  * @return NiveauEnseignement[] Returns an array of NiveauEnseignement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NiveauEnseignement
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
