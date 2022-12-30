<?php
/**
 * DOE Application API
 * By Confused Character
 * github https://github.com/ConfusedCharacter/
 * 
 */

// Get function for code faster

function get($url,$auth){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('authorization: '.$auth) );
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

// Urls

$login_url = "https://aqms.doe.ir/Service/v1/login/";
$region_url = "https://aqms.doe.ir/Service/api/v1/Region/Get/?StateId=2";
$state_url = "https://aqms.doe.ir/Service/api/v2/Station/GetByStateId/?StateId=2";
$AQI_url = "https://aqms.doe.ir/Service/api/v2/AQI/Get/?StateId=2";
$auth_token = "Bearer ";
$login_data = "password=doeAndroidPass&grant_type=password&username=doeAndroidUser";

// Get Access Token

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$login_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$login_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$login_detail = curl_exec($ch);
$login_detail = json_decode($login_detail);
curl_close ($ch);

// Build Access Token

$auth_token = $auth_token.$login_detail -> access_token;

// Example 

echo get($AQI_url,$auth_token);