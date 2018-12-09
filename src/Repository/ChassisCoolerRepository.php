<?php

namespace App\Repository;

use App\Entity\ChassisCooler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ChassisCooler|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChassisCooler|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChassisCooler[]    findAll()
 * @method ChassisCooler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChassisCoolerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ChassisCooler::class);
    }

//    /**
//     * @return ChassisCooler[] Returns an array of ChassisCooler objects
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
    public function findOneBySomeField($value): ?ChassisCooler
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
