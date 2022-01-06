<?php

namespace Bosqu\ProjetPageAdministration\Controller;

use Twig\Error\Error;

class HomeController extends Controller
{

    public function home()
    {
        try {
            $this->render('home.html.twig', [
                'title' => "Administration",
            ]);
        }
        catch (Error $e) {
            echo $e->getMessage();
        }
    }
}