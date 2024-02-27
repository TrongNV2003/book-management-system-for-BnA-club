<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Guest\Home::index');
$routes->get('SignUp','Guest\Home::signUp');
$routes->get('AboutUs','Guest\Home::aboutUs');
$routes->get('ContactUs','Guest\Home::contactUs');
$routes->get('SupportUs','Guest\Home::supportUs');
$routes->get('Policy','Guest\Home::policy');
$routes->get('JoinUs','Guest\Home::joinUs');
$routes->get('BorrowBook','Guest\Home::borrowBook');
$routes->get('RenewBook','Guest\Home::renewBook');
$routes->get('ReturnBook','Guest\Home::returnBook');
$routes->get('SuggestBook','Guest\Home::suggestBook');

// $routes->get('Browse/(:any)','Guest\Home::browse/$1');
$routes->group('Browse',function($routes){
    $routes->get('TopSearch','Guest\Home::browse/Top Search');
    $routes->get('ValueBooks','Guest\Home::browse/Value Books');
    $routes->get('Borrowing','Guest\Home::borrowing');
    $routes->get('Category','Guest\Home::category');
    $routes->get('Search/(:segment)','Guest\Home::browse/$1');
    $routes->get('BookDetail/(:segment)','Guest\Home::bookDetail/$1');
});



$routes->get('Login','Guest\Login::index');


// $routes->get('TestBnA/(:any)', 'TestBnA::index/$2');


$routes->group('Admin',function($routes){
    $routes->get('/','Admin\AdminHome::index');
    $routes->get('Member','Admin\AdminHome::memberList');
    $routes->get('Contact','Admin\AdminHome::contact');
    $routes->group('Book',function($routes){
        $routes->get('ListBook','Admin\AdminHome::manageBook');
        $routes->get('AddBook','Admin\AdminHome::addBook');
        $routes->post('New','Admin\AdminHome::newBook');
    });
});


$routes->get('test','Guest\Home::test');