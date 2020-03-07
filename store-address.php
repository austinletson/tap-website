<?php // for MailChimp API v3.0

include('MailChimp.php');  // path to API wrapper downloaded from GitHub

use \DrewM\MailChimp\MailChimp;

function storeAddress() {

    $key        = "048f8c0bf8492a08e8fb47e4e62fb83c-us15";
    $list_id    = "a32642cf8f";

    $merge_vars = array(
        'FNAME'     => $_POST['FNAME'],
        'LNAME'     => $_POST['LNAME']
    );

    $mc = new MailChimp($key);

    // add the email to your list
    $result = $mc->post('/lists/'.$list_id.'/members', array(
            'email_address' => $_POST['EMAIL'],
            'merge_fields'  => $merge_vars,
            'status'     => 'subscribed'  // single opt-in
        )
    );

    return json_encode($result);

}

// If being called via ajax, run the function, else fail

if ($_POST['ajax']) { 
    echo storeAddress(); // send the response back through Ajax
} else {
    echo 'Method not allowed - please ensure JavaScript is enabled in this browser';
}