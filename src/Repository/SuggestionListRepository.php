<?php

namespace App\Repository;

use App\Entity\SuggestionList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SuggestionList|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuggestionList|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuggestionList[]    findAll()
 * @method SuggestionList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuggestionListRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SuggestionList::class);
    }

    // /**
    //  * @return SuggestionList[] Returns an array of SuggestionList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SuggestionList
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
