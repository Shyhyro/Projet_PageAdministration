<?php

use Bosqu\ProjetPageAdministration\Model\Manager\UserManager;

$users = new UserManager();

$allUsers = $users->getAllUser();

foreach ($allUsers as $oneUser) {
?>
    <tr>
        <td><?=$oneUser->getUsername?></td>
        <td><?=$oneUser->getRegistration?></td>
        <td><button type="button">Edit</button><button type="button">Delete</button></td>
    </tr>
<?php
}
?>