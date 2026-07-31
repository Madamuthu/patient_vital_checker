<?php

function checkTemperature($vitalData)
{
    $temp = $vitalData["value"];

    if ($temp > 100) {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Fever detected";
    } elseif ($temp < 98) {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Body temperature low";
    } else {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Temperature normal";
    }

    return $vitalData;
}

function checkPulse($vitalData)
{
    $pulse = $vitalData["value"];

    if ($pulse > 100) {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Pulse rate high";
    } elseif ($pulse < 60) {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Pulse rate low";
    } else {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Pulse rate normal";
    }

    return $vitalData;
}

function checkBloodPressure($vitalData)
{
    list($sys, $dia) = explode("/", $vitalData["value"]);

    if ($sys > 140 || $dia > 90) {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Blood pressure high";
    } elseif ($sys < 90 || $dia < 60) {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Blood pressure low";
    } else {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Blood pressure normal";
    }

    return $vitalData;
}

?>