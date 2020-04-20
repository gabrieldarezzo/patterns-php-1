<?php



$sites = (new App\Model\Sites)->getAll();


echo '<ul>';
foreach ($sites as $site) {
    echo '<li>'. $site->name .'</li>';
}
echo '</ul>';
