<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    public function inscritCourse($idCourse){
        return $this->createQueryBuilder('u')
        ->leftJoin('u.inscriptions', 'i')
        ->where('i.circuit =:idCourse')
        ->setParameter('idCourse', $idCourse)
        ->orderBy('u.membre', 'DESC')
        ->orderBy('i.dateInscription', 'ASC')
        ->getQuery()
        ->execute(); 
    }

    public function inscritCourseListeAttente($idCourse){
        return $this->createQueryBuilder('u')
        ->select('u.id , i.listeAttente')
        ->leftJoin('u.inscriptions', 'i')
        ->where('i.circuit =:idCourse')
        ->setParameter('idCourse', $idCourse)
        ->orderBy('u.membre', 'DESC')
        ->orderBy('i.dateInscription', 'ASC')
        ->getQuery()
        ->execute(); 
    }

    /**
     * Recherche les personnes en fonction du formulaire
     */
    public function search($mot){
        return $this->createQueryBuilder('u')
            ->setParameter('mot',$mot)
            ->where('u.nom like :mot ')
            ->orWhere('u.prenom like :mot ')
            ->orWhere('u.email like :mot ')
             ->setParameter('mot','%'.$mot.'%')
            ->getQuery()
            ->execute();
    }


    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
