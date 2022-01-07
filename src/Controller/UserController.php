<?php

namespace Bosqu\ProjetPageAdministration\Controller;

use Bosqu\ProjetPageAdministration\Model\Manager\UserManager;
use Twig\Error\Error;

class UserController extends Controller
{

    public function home()
    {
        $allUser = (new UserManager())->getAllUser();
        try {
            $this->render('user.html.twig', [
                "users" => $allUser
            ]);
        }
        catch (Error $e) {
            echo $e->getMessage();
        }
    }

    public function add()
    {
        $user = strip_tags(trim($_POST['user']));

        $article = (new UserManager())->addUser($user);

        if ($article) {
            header('location:index.php?controller=user');
        }
    }
}