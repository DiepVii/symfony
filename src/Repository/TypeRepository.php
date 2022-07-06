<?php

namespace App\Repository;

use App\Entity\Type;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Type>
 *
 * @method Type|null find($id, $lockMode = null, $lockVersion = null)
 * @method Type|null findOneBy(array $criteria, array $orderBy = null)
 * @method Type[]    findAll()
 * @method Type[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeRepository extends ServiceEntityRepository
{
    // protected $entityManager;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Type::class);
    }

    public function add(Type $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Type $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function create($type)
    {
        $type_add = $this->getEntityManager()->persist($type);
        $this->getEntityManager()->flush();
        return $type_add;
    }

    public function show_type()
    {
        $types = $this->getEntityManager()->getRepository(Type::class)->findby(array(), array('id' => 'desc'));
        return $types;
    }

    public function update($data, $id)
    {
        $type = $this->getEntityManager()->getRepository(Type::class)->find($id);
        if (!$type) {
            throw $this->createNotFoundException(
                'No Type found for id ' . $id
            );
        }
        $type_update = $type->setTypename($data['type_name']);
        $type_update = $type->setTypedescription($data['type_description']);
        $this->getEntityManager()->flush();
        return $type_update;
    }

    public function delete($id)
    {
        $type = $this->entityManager->getRepository(Type::class)->find($id);

        if (!$type) {
            throw $this->createNotFoundException(
                'No Type found for id ' . $id
            );
        }

        $type_delete = $this->entityManager->remove($type);
        $this->entityManager->flush();
        return $type_delete;
    }

    public function find_type_byID($id)
    {
        $type = $this->entityManager->getRepository(Type::class)->find($id);
        return $type;
    }
    //    /**
    //     * @return Type[] Returns an array of Type objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Type
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
