<?php
require_once __DIR__ . "/../../../www/actions/action_manager.php";
?>
<?php if ($user == false) { ?>

<ul>
    <li><a href="/?page=home">Home</a></li>
<?php if ($user === false) { ?>
    <li><a href="/?page=signup">Signup</a></li>
    <li><a href="/?page=login">Login</a></li>
<?php } else { ?>
    <li><?= $user->email; ?></li>
    <li><a href="/actions/logout.php">Logout</a></li>
<?php } ?>
</ul>

<?php } else {
     if ($user->role >= $role_manager){ ?>

    <ul>
        <li><a href="/?page=home">Home</a></li>
        <li><a href="/?page=contact">Contact</a></li>
    <?php if ($user === false) { ?>
        <li><a href="/?page=signup">Signup</a></li>
        <li><a href="/?page=login">Login</a></li>
    <?php } else { ?>
        <li><?= $user->email; ?></li>
        <li><a href="/actions/logout.php">Logout</a></li>
    <?php } ?>
        <li><a href="/?page=admin_contact">Admin Contact</a></li>
    </ul>

    <?php } elseif ($user->role == $role_confirme) { ?>

    <ul>
        <li><a href="/?page=home">Home</a></li>
        <li><a href="/?page=contact">Contact</a></li>
    <?php if ($user === false) { ?>
        <li><a href="/?page=signup">Signup</a></li>
        <li><a href="/?page=login">Login</a></li>
    <?php } else { ?>
        <li><?= $user->email; ?></li>
        <li><a href="/actions/logout.php">Logout</a></li>
    <?php } ?>
        <li><a href="/?page=conversion">Conversion</a></li>
    </ul>

    <?php } elseif ($user->role == $role_no_confirme) { ?>

        <p>compte non vérifier attendre un admin.</p>

    <?php } elseif ($user->role == $role_ban) { ?>
        <p>Vous avez été banni de ce site pour certaines raisons.</p>
    <?php }} ?>