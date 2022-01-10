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

    public function delete()
    {
        $user = strip_tags(trim($_GET['user']));

        $article = (new UserManager())->deleteUser($user);

        if ($article) {
            header('location:index.php?controller=user');
        }
    }

    public function edit()
    {
        $user = strip_tags(trim($_POST['user']));
        $newUsername = strip_tags(trim($_POST['newUsername']));

        $userEdit = (new UserManager())->editUser($user, $newUsername);

        if ($userEdit) {
            header('location:index.php?controller=user');
        }
    }
}