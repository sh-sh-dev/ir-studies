<div class="buttons">
    <?php
    if (!empty($_SERVER['HTTP_REFERER'])) {
        ?>
		<a class="has-ripple" href="javascript:history.back()">
			<img src="assets/dist/img/buttons/icon_back.svg">
		</a>
    <? }
    else {
        ?>
<!--		<a class="material-icons has-ripple" href="javascript:history.back()">-->
<!--			<img src="assets/dist/img/buttons/icon_back.svg">-->
<!--		</a>-->
        <?php
    }
    ?>
    <a class="has-ripple" href="<?=getSetting('url')?>">
		<img src="assets/dist/img/buttons/icon_home.svg">
	</a>
    <a class="has-ripple" href="javascript:openMenu()">
		<img src="assets/dist/img/buttons/icon_navigation.svg">
	</a>
</div>
