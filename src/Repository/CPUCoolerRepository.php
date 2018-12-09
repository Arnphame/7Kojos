<?php

namespace App\Repository;

use App\Entity\CPUCooler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CPUCooler|null find($id, $lockMode = null, $lockVersion = null)
 * @method CPUCooler|null findOneBy(array $criteria, array $orderBy = null)
 * @method CPUCooler[]    findAll()
 * @method CPUCooler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CPUCoolerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CPUCooler::class);
    }

//    /**
//     * @return CPUCooler[] Returns an array of CPUCooler objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CPUCooler
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
