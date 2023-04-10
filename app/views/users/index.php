<?php

$title = 'User list';
ob_start();

?>

<h1>User list</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Login</th>
        <th scope="col">Admin</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) ?>
    <th scope="row"><?php echo $user['id']; ?></th>
    <?php endforeach; ?>
    </tbody>
</table>