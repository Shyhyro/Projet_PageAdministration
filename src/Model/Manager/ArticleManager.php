<?php

namespace Bosqu\ProjetPageAdministration\Model\Manager;

use Bosqu\ProjetPageAdministration\Classes\Database;
use Bosqu\ProjetPageAdministration\Model\Entity\Article;

class ArticleManager
{
    public function getAllArticles(): ?array
    {
        $array = [];
        $stmt = Database::getInstance()->prepare("SELECT * FROM article ORDER BY registration DESC ");

        if($stmt->execute() && $subjectDatas = $stmt->fetchAll()) {
            foreach ($subjectDatas as $subjectData) {
                $array[] = new Article($subjectData['id'], $subjectData['registration'], $subjectData['article'], $subjectData['user'], $subjectData['category']);
            }
        }
        return $array;
    }

    public function addArticle ($user, $category, $name) :bool
    {
        $stmt = Database::getInstance()->prepare("INSERT INTO article (article, user, category) 
                                                        VALUES (:name, :user, :category)");
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':user', $user);
        $stmt->bindValue(':category', $category);

        return $stmt->execute();
    }

    public function deleteArticle($articleId) :bool
    {
        $stmt = Database::getInstance()->prepare("DELETE FROM article WHERE id = :articleId ");
        $stmt->bindValue(':articleId', $articleId);

        return $stmt->execute();
    }
}