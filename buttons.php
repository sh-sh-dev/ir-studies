<div class="buttons">
<<<<<<< HEAD
    <a class="has-ripple">
        <img src="assets/dist/img/buttons/icon_back.svg">
    </a>
    <a class="has-ripple">
        <img src="assets/dist/img/buttons/icon_home.svg">
	</a>
    <a class="has-ripple" href="javascript:$('.sidenav').addClass('active')">
        <img src="assets/dist/img/buttons/icon_navigation.svg">
	</a>
=======
    <?php
    if (!empty($_SERVER['HTTP_REFERER'])) {
        ?>
    <a class="material-icons has-ripple" href="javascript:history.back()">arrow_back</a>
    <? }
    else {
        ?>
    <a class="material-icons has-ripple">arrow_back</a>
        <?php
    }
    ?>
    <a class="material-icons has-ripple" href="<?=getSetting('url')?>">home</a>
    <a class="material-icons has-ripple" href="javascript:openMenu()">menu</a>
>>>>>>> cfe32683e274aeb14426f65a6610719a67fd80d5
</div>