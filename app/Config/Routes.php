<?php

namespace Config;

use App\Controllers\Auth\LoginController as Login;
use App\Controllers\Auth\LogoutController as Logout;
use App\Controllers\Auth\RegisterController as Register;
use App\Controllers\Client\HomeController as Home;
use App\Controllers\Client\PetCenterController as PetCenter;
use App\Controllers\Client\ServiceController as Service;
use App\Controllers\Client\TestimoniController as Testimoni;
use App\Controllers\Client\TransactionHistoryController as TransactionHistory;
use App\Controllers\Dashboard\BookingReportController as BookingReport;
use App\Controllers\Dashboard\FinancialReportController as FinancialReport;
use App\Controllers\Dashboard\OverviewController as Overview;
use App\Controllers\Dashboard\SalesController as Sales;
use App\Controllers\Dashboard\UsersController as UsersManage;
use App\Controllers\Dashboard\ProsevController as Prosev;
use App\Controllers\Server\CheckoutController;

$route = Services::routes();

$route->get('/', [Home::class, 'showHome']);
$route->get('/petshop_center', [PetCenter::class, 'showPetshopCenter']);
$route->get('/services', [Service::class, 'showServices']);
$route->get('/testimonial', [Testimoni::class, 'showTestimonial']);

$route->get('/login', [Login::class, 'showLogin']);
$route->post('/handleLogin', [Login::class, 'handleLogin']);
$route->get('/register', [Register::class, 'showRegister']);
$route->post('/handleRegister', [Register::class, 'handleRegister']);
$route->get('/detail/(:num)', [PetCenter::class, 'detail']);
$route->get('/checkout/(:num)', [PetCenter::class, 'checkout']);

$route->group('', ['filter' => 'auth'], function ($route) {
    $route->group('', ['filter' => 'admin'], function ($route) {
        $route->get('/overview', [Overview::class, 'showOverview']);
        $route->get('/users_management', [UsersManage::class, 'showUsers']);
        $route->post('/create_user', [UsersManage::class, 'create']);
        $route->post('/delete_user/(:num)', [UsersManage::class, 'delete']);
        $route->post('/update_user/(:num)', [UsersManage::class, 'update']);
        $route->get('/products_management', [Prosev::class, 'showProducts']);
        $route->get('/services_management', [Prosev::class, 'showServices']);
        $route->get('/sales_report', [Sales::class, 'showSales']);
        $route->get('/booking_report', [BookingReport::class, 'showBooking']);
        $route->get('/financial_report', [FinancialReport::class, 'showFinancial']);
        $route->post('/create_prosev', [Prosev::class, 'create_prosev']);
        $route->post('/delete_prosev/(:num)', [Prosev::class, 'delete_prosev']);
        $route->post('/update_prosev/(:num)', [Prosev::class, 'update_prosev']);
    });

    $route->group('', ['filter' => 'member'], function ($route) {
        $route->post('/pay/(:num)', [CheckoutController::class, 'pay']);
        $route->get('/transaction_history', [TransactionHistory::class, 'showTransaction']);
    });
    $route->post('/delete_transaction/(:num)', [TransactionHistory::class, 'delete']);
    $route->post('/handleLogout', [Logout::class, 'handleLogout']);
});
/*
 * --------------------------------------------------------------------
 * Default Router
 * --------------------------------------------------------------------
 */
$route->setTranslateURIDashes(false);
$route->set404Override();

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
