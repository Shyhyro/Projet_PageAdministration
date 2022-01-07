<?php

namespace Bosqu\ProjetPageAdministration\Controller;

use Twig\Error\Error;

class ArticleController extends Controller
{
    public function home()
    {
        try {
            $this->render('article.html.twig', [
            ]);
        }
        catch (Error $e) {
            echo $e->getMessage();
        }
    }
}