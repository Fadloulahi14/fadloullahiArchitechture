<?php

namespace Src\Repository;
use Src\Entity\Users;
use App\Core\Database;

class UsersRepository{
    private Database $db;
    
   private string $tableName= 'user';
    public function __construct(){
        $this->db = new Database;

    }

    public function selectByTelephoneAndPassword($telephone,$password) : ?Users {
        try {
               $sql='Select * from "user" where  telephone= :telephone and password= :password';
               
               $stmt=$this->db->pdo->prepare($sql);
               $stmt->execute([
                   ':telephone'=>$telephone,
                   ':password'=>$password
               ]);
               $result=$stmt->fetch(\PDO::FETCH_ASSOC);
               if($result){
                   $user=Users::toObject($result);
                //    var_dump($user);
                //    die();
                
                return $user;
               }
               return null;

        } catch (\Throwable $th) {
            throw new \Exception($th->getMessage());
            
        }
        
    }
}