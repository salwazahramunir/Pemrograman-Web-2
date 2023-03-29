<?php
$ar_menu = [
    'Home' => 'home.php',
    'Produk' => 'produk.php',
    'Profile' => 'profile.php',
    'About' => 'about.php'
]
?>
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
    <div class="list-group list-group-flush">
        <?php
        foreach ($ar_menu as $key => $value) {
        ?>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?= $value ?>"><?= $key ?></a>
        <?php
        }
        ?>
    </div>
</div>