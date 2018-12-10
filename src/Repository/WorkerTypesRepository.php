<?php

namespace App\Repository;

use App\Entity\WorkerTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method WorkerTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkerTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkerTypes[]    findAll()
 * @method WorkerTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkerTypesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WorkerTypes::class);
    }

    // /**
    //  * @return WorkerTypes[] Returns an array of WorkerTypes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WorkerTypes
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
