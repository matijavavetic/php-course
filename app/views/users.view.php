<?php require('partials/head.php'); ?>

<h1>Users</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>
<h1>Submit your name</h1>

<form method="POST" action="/php_course/users">

    <input name="name">
    <button type="submit">Submit</button>

</form>

<?php require('partials/footer.php'); ?>
