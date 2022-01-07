<?php

namespace Bosqu\ProjetPageAdministration\Controller;

use Bosqu\ProjetPageAdministration\Model\Manager\ArticleManager;
use Bosqu\ProjetPageAdministration\Model\Manager\CategoryManager;
use Bosqu\ProjetPageAdministration\Model\Manager\UserManager;
use Twig\Error\Error;

class ArticleController extends Controller
{
    public function home()
    {
        $allUsers = (new UserManager())->getAllUser();
        $allCategory = (new CategoryManager())->getAllCategory();
        $allArticle = (new ArticleManager())->getAllArticles();
//        echo "<pre>";
//        print_r($allArticle);
//        echo "</pre>";
        try {
            $this->render('article.html.twig', [
                "users" => $allUsers,
                "categories" => $allCategory,
                "articles" => $allArticle
            ]);
        }
        catch (Error $e) {
            echo $e->getMessage();
        }
    }

    public function add()
    {
        $article = new ArticleManager();

        $user = $_GET['user'];
        $category = $_GET['category'];
        $article = $_GET['article'];

        $article = $article->addArticle($user, $category, $article);
    }
}