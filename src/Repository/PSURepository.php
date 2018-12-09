<?php

namespace App\Repository;

use App\Entity\PSU;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PSU|null find($id, $lockMode = null, $lockVersion = null)
 * @method PSU|null findOneBy(array $criteria, array $orderBy = null)
 * @method PSU[]    findAll()
 * @method PSU[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PSURepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PSU::class);
    }

//    /**
//     * @return PSU[] Returns an array of PSU objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PSU
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
