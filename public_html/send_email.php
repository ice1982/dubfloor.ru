<?php

require_once('_params.php');

/**
 * [sendEmail description]
 * @param  [type] $from    [description]
 * @param  [type] $to      [description]
 * @param  [type] $subject [description]
 * @param  [type] $message [description]
 * @return [type]          [description]
 */
function sendEmail($from, $to, $subject, $message)
{
    if (is_array($to)) {
        $to = implode(',', $to);
    }
    return mail($to, $subject, $message, "Content-Type: text/html; charset=utf-8;\nFrom: $from");
}

$message = '';

if ( (isset($_POST)) && (!empty($_POST)) ) {


    $subject = 'С лендинга ' . $site . ' поступила заявка';

    $dump = array(
        'email' => false,
        'name' => false,
        'phone' => false,
        'utm' => array(),
        'form_id' => false,
        'form_offer' => false,
    );

    if (isset($_POST['name']) && (!empty($_POST['name']))) {
        $dump['name'] = $_POST['name'];
    } else {
        header('Location: http://' . $site . '?email_fail=1');
        die();
    };

    if (isset($_POST['phone']) && (!empty($_POST['phone']))) {
        $dump['phone'] = $_POST['phone'];
    } else {
        header('Location: http://' . $site . '?email_fail=1');
        die();
    };

    if (isset($_POST['email']) && (!empty($_POST['email']))) {
        $dump['email'] = $_POST['email'];
    } else {
        header('Location: http://' . $site . '?email_fail=1');
        die();
    };

    if (isset($_POST['form_id']) && (!empty($_POST['form_id']))) {
        $dump['form_id'] = $_POST['form_id'];
    }

    if (isset($_POST['utm']) && (!empty($_POST['utm']))) {
        $dump['utm'] = json_decode(str_replace("'", '"', $_POST['utm']), true);
    }

    if (isset($_POST['form_offer']) && (!empty($_POST['form_offer']))) {
        $dump['form_offer'] = $_POST['form_offer'];
    }

    $message .= $subject . ':<br>';

    $message .= '<br>';

    $message .= '<b>Имя:</b> ' . htmlspecialchars($dump['name']) . '<br>';
    $message .= '<b>Телефон:</b> ' . htmlspecialchars($dump['phone']) . '<br>';
    $message .= '<b>Email:</b> ' . htmlspecialchars($dump['email']) . '<br>';

    $message .= '<br>';

    $comment = '';

    $comment .= '<b>Что за форма:</b> ' . htmlspecialchars($dump['form_id']) . '<br>';
    $comment .= '<b>Что за офер:</b> ' . htmlspecialchars($dump['form_offer']) . '<br>';

    $comment .= '<br>';
    $comment .= '<b>UTM-метки:</b><br>';
    $comment .= '<br>';

    if (count($dump['utm'])) {
        foreach ($dump['utm'] as $key => $value) {
            $comment .= '<b>' . htmlspecialchars($key) . ':</b> ' . htmlspecialchars($value) . '<br>';
        }
    } else {
        $comment .= 'UTM-меток нет';
    }

    $message .= $comment;

    try {
        require_once('crm.php');
    } catch (Exception $e) {

    }

    if (sendEmail($from, $to, $subject, $message)) {
        header('Location: http://' . $site . '?email_ok=1');
        die();
    } else {
        header('Location: http://' . $site . '?email_fail=1');
        die();
    }
} else {
    header('Location: http://' . $site);
}

die();

?>