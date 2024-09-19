<?php
require_once(__DIR__ . "/../partials/head.php");
?>

<div class="login-page">
    <div class="form">
        <form class="login-form" method="POST">

            <label for="mail"></label>
            <input type="text" id="mail" name="mail" placeholder="email" />
            <?php if (isset($arrayError['mail'])) {
				?>
					<p class='text-danger'><?= $arrayError['mail'] ?></p>
				<?php
            } ?>
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="mot de passe" />
            <?php if (isset($arrayError['password'])) {
				?>
					<p class='text-danger'><?= $arrayError['password'] ?></p>
				<?php
            } ?>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</div>
<script>
    $('.message a').click(function() {
        $('form').animate({
            height: "toggle",
            opacity: "toggle"
        }, "slow");
    });
</script>

<?php
include_once(__DIR__ . "/../partials/footer.php");
?>