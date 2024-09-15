<?php

    require_once 'consts.php';
    require_once 'funtions.php';

    $data = get_data(JSON_URL);
    $until_message = get_until_message($data["following_production"]["days_until"]);

?>

<?= render_template('head', $data) ; ?>
<?= render_template('styles') ; ?>
<?= render_template('secondmain', array_merge($data, ["until_message" => $until_message])) ; ?>