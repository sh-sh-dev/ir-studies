<div class="buttons">
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
</div>