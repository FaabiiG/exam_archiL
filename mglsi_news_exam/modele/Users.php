<?php

class Users
{
      public static function getAllUsers()
        {
            $bdd = ConnexionManager::getInstance();
			      $requete = $bdd->query('SELECT * FROM users');
            $users = $requete->fetchAll();
            return $users;
        }

      public static function addUser($login,$motdepasse,$role)
      {
        $bdd = ConnexionManager::getInstance();
        $requete = $bdd->prepare("INSERT INTO users (login,motdepasse,role) VALUES ('$login','$motdepasse','$role')");
        if ($requete->execute(array(
          'login' => $login,
          'motdepasse' => $motdepasse,
          'role' => $role
        ))) {
          return true;
        }
    
        return false;
      }

      public static function updateUser($id,$login,$motdepasse,$role)
      {
        $bdd = ConnexionManager::getInstance();
        $requete = $bdd->prepare("UPDATE users SET login=:login , motdepasse=:motdepasse,role=:role WHERE id=:id");
        if ($requete->execute(array(
          'login' => $login,
          'motdepasse' => $motdepasse,
          'role' => $role,
          'id'=> $id
        ))) {
          return true;
        }
    
        return false;
      }

      public static function deleteUser($id)
      {
        $bdd = ConnexionManager::getInstance();
        $requete = $bdd->prepare("DELETE FROM users WHERE id=:id");
        if ($requete->execute(array(  
          'id'=> $id
        ))) {
          return true;
        }
    
        return false;
      }
      
     

}



?>