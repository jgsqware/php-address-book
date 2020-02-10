<?php

require_once dirname(__DIR__) . '/src/Address.php';

function getAddresses(){
    return apcu_fetch('addresses');
}

function addAddress($id,$number, $street,$postcode,$city,$country){
    $addresses = apcu_fetch('addresses');

    $addresses[] = newAddress($id,$number, $street,$postcode,$city,$country);
    apcu_store('addresses',$addresses);
}

function deleteAddress($id){
    $addresses = apcu_fetch('addresses');

    $i = 0;
    $toDelete = -1;

    foreach ($addresses as $a){
        if($a['id'] == $id){
            $toDelete = $i;
            break;
        }
        $i++;
    }

    if($toDelete != -1){
        unset($addresses[$toDelete]);
    }

    apcu_store('addresses',$addresses);
}