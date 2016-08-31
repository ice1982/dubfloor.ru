<?php

if (isset($_GET)) {
    $send_utm = str_replace('"', "'", (json_encode($_GET))); // отправка утм меток в обработчик письма.
} else {
    $send_utm = '';
}

?>