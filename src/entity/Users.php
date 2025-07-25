<?php

namespace Src\Entity;
use App\Core\Abstract\AbstractEntity;

class Users  extends AbstractEntity {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $login;
    private string $password;
    private TypeUser $Typeuser;
    private string $adresse;
    private Compte $compte;
    private string $numerocni;
    private string $photocnirecto;
    private string $photocniverso;
    private array $telephone = [];

    public function __construct(int $id=0, string $nom='',string $prenom='', string $login='', string $password='',  string $adresse='',  string $numerocni='', string $photocnirecto='', string $photocniverso='')
    {
     $this->nom=$nom;
     $this->prenom=$prenom;
     $this->login=$login;
     $this->password=$password;
     $this->adresse=$adresse;
     $this->numerocni=$numerocni;
     $this->photocnirecto=$photocnirecto;
     $this->photocniverso=$photocniverso;
        
    }

    public function getCompte(): Compte
    {
        return $this->compte;
    }
    public function addCompte(Compte $compte): void
    {
        $this->compte = $compte;
    }
    public function getTypeUser(): TypeUser
    {
        return $this->Typeuser;
    }
    public function setTypeUser(TypeUser $Typeuser): void
    {
        $this->Typeuser = $Typeuser;
    }

    

    
    public function getNom()
    {
        return $this->nom;
    }
 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
  

    public static function toObject(array $data): static
{
    $user = new Users(
        $data['id'] ?? 0,
        $data['nom'] ?? '',
         $data['prenom'] ?? '',
       $data['login'] ?? '',
         $data['password'] ?? '',
      $data['adresse'] ?? '',
      $data['numerocni'] ?? '',
        $data['photocnirecto'] ?? '',
         $data['photocniverso'] ?? ''
    );

   

    

    return $user;
}

   public function toArray(): array
   {
       return [
         'id' => $this->id,
           'nom' => $this->nom,
           'prenom' => $this->prenom,
           'login' => $this->login,
           'password' => $this->password,
           'adresse' => $this->adresse,
           'numerocni' => $this->numerocni,
           'photocnirecto' => $this->photocnirecto,
           'photocniverso' => $this->photocniverso,
           'telephone' => $this->telephone,
       ];
   }
}