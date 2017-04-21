<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../model/employee.php';

$settings = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new \Slim\App($settings);

$container = $app->getContainer();

//Configure template and cache
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates', [
        'cache' => '../templates/cache'
    ]);
    
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

//index
$app->get('/', function (Request $request, Response $response) {	
	
    $objEmployee = new Employee();

    return $this->view->render($response, 'list.html', ['employees' => $objEmployee->getAll()]);

});

//Get employee by id
$app->get('/employee/{id}', function (Request $request, Response $response) {
	
    $id = $request->getAttribute('id');

	$objEmployee = new Employee();

    return $this->view->render($response, 'detail.html', ['employee' => $objEmployee->getById($id)]);
});

//Find employee by email
$app->get('/search', function (Request $request, Response $response) {
	
    $email = $request->getParam('email');

	$objEmployee = new Employee();

    $data = array('employees' => $objEmployee->getByEmail(trim($email)), 'email' => $email);
    
    return $this->view->render($response, 'list.html', $data);
});

//Service filter by salary of employee
$app->get('/service/findBySalary/{min}/{max}', function (Request $request, Response $response) {
    
    $min = $request->getAttribute('min');

    $max = $request->getAttribute('max');

	$employee = new Employee();

	$filterResult = $employee->filterBySalary($min, $max);

	$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><Response></Response>");

	$node = $xml->addChild('Employees');

	parseArrayToXml($filterResult, $node);

	$response = $response->withHeader('Content-type', 'text/xml');

    $response->getBody()->write($xml->asXML());

    return $response;
});

function parseArrayToXml($array, &$xml) {
    foreach($array as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
                $subnode = $xml->addChild("$key");
                parseArrayToXml($value, $subnode);
            } else {
                parseArrayToXml($value, $xml);
            }
        } else {
            $xml->addChild("$key","$value");
        }
    }
}

$app->run();
