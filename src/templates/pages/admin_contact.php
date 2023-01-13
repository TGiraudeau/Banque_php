<?php
ob_start();
$page_title = "Admin contact - monsite.com";
$forms = $contactFormManager -> get_forms();
?>

<div class="fill">
<h1>Admin contact</h1>
<?php
foreach ($forms as $cform){ ?>
<div>
    <span> Nom : <?= $cform -> fullname?></span><br>
    <span>Email : <?= $cform ->email?></span><br>
    <span>Phone : <?= $cform->phone?></span><br>
    <span>Message :</span>  <p>
    <?= $cform->message?></p>
</div>
</div>
<hr>
<?php
}
?>

<?php
$page_content = ob_get_clean();
