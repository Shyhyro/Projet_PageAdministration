<?php

namespace Bosqu\ProjetPageAdministration\Model\Manager;

use Bosqu\ProjetPageAdministration\Classes\Database;
use Bosqu\ProjetPageAdministration\Model\Entity\User;

class UserManager
{
    public function getAllUser() : ?array
    {
        $array = [];
        $stmt = Database::getInstance()->prepare("SELECT * FROM user");

        if ( $stmt->execute() && $userDatas = $stmt->fetchAll() ) {
            foreach ( $userDatas as $userData ) {
                $array[] = new User( $userData['id'], $userData['registration'], $userData['username'] );
            }
        }
        return $array;
    }

    public function addUser($username) :bool
    {
        $stmt = Database::getInstance()->prepare("INSERT INTO user (username) VALUES (:username)");
        $stmt->bindValue(':username', $username);

        return $stmt->execute();
    }

    public function deleteUser($userId) :bool
    {
        $stmt = Database::getInstance()->prepare("DELETE FROM user WHERE id = :userId ");
        $stmt->bindValue(':userId', $userId);

        return $stmt->execute();
    }
}