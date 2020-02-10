<?php

function newAddress($id,$number, $street,$postcode,$city,$country){
    return array(
        'id' => $id,
        'number' => $number,
        'street' => $street,
        'postcode' => $postcode,
        'city' => $city,
        'country' => $country
    );
}

function printAddress($address){
    return  $address['id'].": ".$address['number'].", ".$address['street']."\t".$address['postcode']." ".$address['city']."\t".$address['country'];
}