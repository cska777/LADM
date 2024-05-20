<?php

namespace App\Repository;

use App\Entity\Abonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Abonnement>
 *
 * @method Abonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abonnement[]    findAll()
 * @method Abonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbonnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abonnement::class);
    }

    public function save(Abonnement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Abonnement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findActualSub($user)
    {
        $qb = $this
            ->createQueryBuilder('abonnement')

            ->where('abonnement.currentPeriodStart < :now')
            ->andWhere('abonnement.currentPeriodEnd > :now')
            ->setParameter('now', new \Datetime('now'))

            ->andWhere('abonnement.user = :user')
            ->setParameter('user', $user)

            ->leftJoin('abonnement.plan', 'plan')
            ->addSelect('plan')

            ->orderBy('abonnement.currentPeriodEnd', 'desc')
            ->setMaxResults(1)

            ->getQuery()
        ;

        return $qb->getOneOrNullResult();
    }

    public function findActiveSub($user)
    {
        $qb = $this
            ->createQueryBuilder('abonnement')

            ->where('abonnement.currentPeriodStart < :now')
            ->andWhere('abonnement.currentPeriodEnd > :now')
            ->setParameter('now', new \Datetime('now'))

            ->andWhere('abonnement.user = :user')
            ->setParameter('user', $user)

            ->andWhere('abonnement.isActive = :true')
            ->setParameter('true', true)

            ->leftJoin('abonnement.plan', 'plan')
            ->addSelect('plan')

            ->orderBy('abonnement.currentPeriodEnd', 'desc')
            ->setMaxResults(1)

            ->getQuery()
        ;

        return $qb->getOneOrNullResult();
    }

    public function findInactiveSub($user)
    {
        $qb = $this
            ->createQueryBuilder('abonnement')

            ->where('abonnement.currentPeriodStart < :now')
            ->andWhere('abonnement.currentPeriodEnd > :now')
            ->setParameter('now', new \Datetime('now'))

            ->andWhere('abonnement.user = :user')
            ->setParameter('user', $user)

            ->orderBy('abonnement.currentPeriodEnd', 'desc')
            ->setMaxResults(1)

            ->getQuery()
        ;

        return $qb->getOneOrNullResult();
    }

}
