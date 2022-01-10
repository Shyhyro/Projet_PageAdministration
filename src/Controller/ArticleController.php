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
        $user = strip_tags(trim($_POST['user']));
        $category = strip_tags(trim($_POST['category']));
        $article = strip_tags(trim($_POST['article']));

        $article = (new ArticleManager())->addArticle($user, $category, $article);

        if ($article) {
            header('location:index.php?controller=article');
        }
    }

    public function delete()
    {
        $article = strip_tags(trim($_GET['article']));

        $article = (new ArticleManager())->deleteArticle($article);

        if ($article) {
            header('location:index.php?controller=article');
        }
    }

    public function edit()
    {
        $article = strip_tags(trim($_POST['article']));
        $newArticle = strip_tags(trim($_POST['newArticle']));
        $newCategory = strip_tags(trim($_POST['newCategory']));

        $articleEdit = (new ArticleManager())->editArticle($article, $newArticle, $newCategory);

        if ($articleEdit) {
            header('location:index.php?controller=article');
        }
    }
}