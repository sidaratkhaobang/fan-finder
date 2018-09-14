<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/FanModel.php';

$app = new \Klein\Klein();

$app->respond('GET', '/', function ($request, $response) {
    return $response->json([
        "status" => "ok",
        "message" => "hello world",
    ]);
});

$app->respond('GET', '/fan/predict', function ($request, $response) {

    $request_data = $request->paramsGet();
    $name = $request_data['name'];
    $lastname = $request_data['lastname'];
    $dob = $request_data['dob'];
    $mobileno = $request_data['mobileno'];

    $prediction_result = FanModel::predict($name, $lastname, $dob, $mobileno);

    return $response->json([
        "status" => "ok",
        "message" => "prediction result",
        "data" => $prediction_result,
    ]);
});

$app->dispatch();
