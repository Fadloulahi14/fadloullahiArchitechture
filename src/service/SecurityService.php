<?php
namespace Src\Service;
use Src\Repository\UsersRepository;
use Src\Entity\Users;
class SecurityService
{
    private UsersRepository $usersrepository;

    public function __construct(){
        $this->usersrepository= new UsersRepository;
    }

  public function login($telephone,$password):?Users{
   
   return $this->usersrepository->selectByTelephoneAndPassword($telephone,$password);
  }
}