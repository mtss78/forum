<?php
    require_once(__DIR__ . "/../partials/head.php");
?>

<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
      <input type="text" id="pseudo" name="pseudo" placeholder="pseudo"/>
      <?php if (isset($arrayError['pseudo'])) {
				?>
					<p class='text-danger'><?= $arrayError['pseudo'] ?></p>
				<?php
            } ?>
      <input type="text" id="mail" name="mail" placeholder="email"/>

      <?php if (isset($arrayError['mail'])) {
				?>
					<p class='text-danger'><?= $arrayError['mail'] ?></p>
				<?php
            } ?>

      <input type="password" id="password" name="password" placeholder="mot de passe"/>

      <?php if (isset($arrayError['password'])) {
				?>
					<p class='text-danger'><?= $arrayError['password'] ?></p>
				<?php
            } ?>


      <button type="submit">S'inscrire</button>
    </form>
  </div>
</div>
<script>
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>

<?php
    include_once(__DIR__ . "/../partials/footer.php");
?>