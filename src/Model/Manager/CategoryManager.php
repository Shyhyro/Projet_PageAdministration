<?php

namespace Bosqu\ProjetPageAdministration\Model\Manager;

use Bosqu\ProjetPageAdministration\Classes\Database;
use Bosqu\ProjetPageAdministration\Model\Entity\Category;

class CategoryManager
{

    public function getCategory($categoryId):Category {
        $stmt = Database::getInstance()->prepare("SELECT * FROM category WHERE id = :categoryId LIMIT 1");
        $stmt->bindValue(':categoryId', $categoryId);
        $state = $stmt->execute();
        $category = null;

        if($state) {
            $categoryData = $stmt->fetch();
            $category = new Category($categoryData['id'], $categoryData['category']);
        }
        return $category;
    }

    public function getAllCategory() : ?array
    {
        $array = [];
        $stmt = Database::getInstance()->prepare("SELECT * FROM category");

        if ( $stmt->execute() && $categoryDatas = $stmt->fetchAll() ) {
            foreach ( $categoryDatas as $categoryData ) {
                $array[] = new Category( $categoryData['id'], $categoryData['category'] );
            }
        }
        return $array;
    }
}