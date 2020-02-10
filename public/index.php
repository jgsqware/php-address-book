<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/src/AddressManager.php';

if(array_key_exists('refresh_list', $_POST)) {
    $data = getAddresses();
    refreshList($data);

}
else if(array_key_exists('add_address', $_POST)) {
    addAddress($_POST['id'],$_POST['number'],$_POST['street'],$_POST['postcode'],$_POST['city'],$_POST['country']);
}
else if(array_key_exists('delete', $_POST)) {
    deleteAddress($_POST['id']);
}



function refreshList($data) {

    $li = "";
    foreach($data as $d){
        $li = $li."<li>".printAddress($d)."</li>";
    }
    echo "
    <div>
        <ul>
            $li
        </ul>   
    </div>

    ";
}