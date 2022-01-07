<?php

namespace Bosqu\ProjetPageAdministration\Controller;

use Twig\Error\Error;

class UserController extends Controller
{

    public function home()
    {
        try {
            $this->render('user.html.twig', [
            ]);
        }
        catch (Error $e) {
            echo $e->getMessage();
        }
    }
}