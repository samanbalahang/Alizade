<?php

use Illuminate\Support\Facades\Route;

//*********************************************************************** LOGIN ***********************************************************************//
Route::get('/','User\Auth\AuthController@login')->name('app_login');
Route::get('/forget-pass','User\Auth\AuthController@forgetPass')->name('app_forget_pass');
Route::get('/register','User\Auth\AuthController@register')->name('app_register');
Route::post('/login-auth','User\Auth\AuthController@authLogin')->name('login_form');
Route::post('/register-auth','User\Auth\AuthController@registerAuth')->name('app_submit_register');
Route::get('/verify-email','User\Auth\AuthController@verifyEmail')->name('app_verify_email');
Route::post('/sendChangePassEmail','User\Auth\AuthController@sendChangePassEmail')->name('sendChangePassEmail');
//*********************************************************************** LOGIN ***********************************************************************//

Route::get('/test','User\Auth\AuthController@test');

//*********************************************************************** DASHBOARD ***********************************************************************//
Route::get('/dashboard','User\Panel\Dashboard\DashboardController@dashboard')->middleware('userAuth')->name('panel_dashboard');
Route::post('/dashboard/getAsset','User\Panel\Dashboard\DashboardController@getAsset')->middleware('userAuth')->name('panel_getAsset_dashboard');
Route::post('/dashboard/transferAsset','User\Panel\Dashboard\DashboardController@transferAsset')->middleware('userAuth')->name('panel_transferAsset_dashboard');
//*********************************************************************** DASHBOARD ***********************************************************************//

//*********************************************************************** ANALYSIS ***********************************************************************//
Route::get('/analysis/chart-analysis','User\Panel\Analysis\AnalysisController@chartAnalysisPage')->middleware('userAuth')->name('panel_analysis_chart');
Route::get('/analysis/tecnical-analysis','User\Panel\Analysis\AnalysisController@tecnicalAnalysisPage')->middleware('userAuth')->name('panel_analysis_tecnical');
Route::get('/analysis/market-cap','User\Panel\Analysis\AnalysisController@marketCapPage')->middleware('userAuth')->name('panel_market_cap');
Route::get('/analysis/market-plan','User\Panel\Analysis\AnalysisController@marketPlanPage')->middleware('userAuth')->name('panel_market_plan');
Route::get('/analysis/market-news','User\Panel\Analysis\AnalysisController@marketNewsPage')->middleware('userAuth')->name('panel_market_news');
//*********************************************************************** ANALYSIS ***********************************************************************//

//*********************************************************************** ACCOUNT MANAGEMENT ***********************************************************************//
Route::get('/account-management','User\Panel\AccountManagement\AccountManagementController@page')->middleware('userAuth')->name('panel_accountManagement');
Route::post('/account-management/save','User\Panel\AccountManagement\AccountManagementController@userInfoSave')->middleware('userAuth')->name('panel_userInfoSave');
Route::post('/account-management/change-pass','User\Panel\AccountManagement\AccountManagementController@changePass')->middleware('userAuth')->name('panel_changePassWord');
//*********************************************************************** ACCOUNT MANAGEMENT ***********************************************************************//

//*********************************************************************** TRADE PASSWORD ***********************************************************************//
Route::get('/trade-password','User\Panel\AccountManagement\AccountManagementController@googleAuth')->middleware('userAuth')->name('panel_tradePassword');
Route::post('/trade-password/save','User\Panel\AccountManagement\AccountManagementController@save2fa')->middleware('userAuth')->name('panel_googleAuth_save');
Route::post('/trade-password/remove','User\Panel\AccountManagement\AccountManagementController@remove2fa')->middleware('userAuth')->name('panel_googleAuth_remove');
//*********************************************************************** TRADE PASSWORD ***********************************************************************//

//*********************************************************************** NETWORKING ***********************************************************************//
Route::get('/networking','User\Panel\AccountManagement\AccountManagementController@networking')->middleware('userAuth')->name('panel_networking');
//*********************************************************************** NETWORKING ***********************************************************************//

//*********************************************************************** CONNECTION ***********************************************************************//
Route::get('/connection/exchange-connection','User\Panel\Exchange\ExchangeController@exchangeConnection')->middleware('userAuth')->name('panel_exchange_conection');
Route::post('/connection/connection-save','User\Panel\Exchange\ExchangeController@connectionSave')->middleware('userAuth')->name('panel_conection_save');
Route::post('/connection/connection-edit','User\Panel\Exchange\ExchangeController@connectionEdit')->middleware('userAuth')->name('panel_conection_edit');
Route::post('/connection/connection-delete','User\Panel\Exchange\ExchangeController@connectionDelete')->middleware('userAuth')->name('panel_conection_delete');
Route::post('/connection/connection-refresh','User\Panel\Exchange\ExchangeController@connectionRefresh')->middleware('userAuth')->name('panel_conection_refresh');
//*********************************************************************** CONNECTION ***********************************************************************//

//*********************************************************************** TRANSACTION ***********************************************************************//
Route::get('/transactions','User\Panel\Transactions\TransactionsController@list')->middleware('userAuth')->name('panel_transactions_list');
//*********************************************************************** TRANSACTION ***********************************************************************//

//*********************************************************************** ACTIVITY ***********************************************************************//
Route::get('/activity-list','User\Panel\Activities\ActivityController@list')->middleware('userAuth')->name('panel_activities');
//*********************************************************************** ACTIVITY ***********************************************************************//

//*********************************************************************** SPOT ***********************************************************************//
Route::get('/spot/smart','User\Panel\Spot\SpotController@smartPage')->middleware('userAuth')->middleware('checkpayment')->name('panel_spot_smart');
Route::post('/spot/get-base-amount','User\Panel\Spot\SpotController@getBase')->middleware('userAuth')->name('panel_spot_getBase');
Route::post('/spot/get-target-amount','User\Panel\Spot\SpotController@getTarget')->middleware('userAuth')->name('panel_spot_getTarget');
Route::post('/spot/get-pairs','User\Panel\Spot\SpotController@getPairs')->middleware('userAuth')->name('panel_spot_getPairs');
Route::post('/spot/get-available','User\Panel\Spot\SpotController@getAvailable')->middleware('userAuth')->name('panel_spot_getAvailable');
Route::post('/spot/order-buy-spot-market','User\Panel\Spot\SpotController@orderBuyMarket')->middleware('userAuth')->name('panel_spot_buy_orderMarket');
Route::post('/spot/order-buy-spot-Limit','User\Panel\Spot\SpotController@orderBuyLimit')->middleware('userAuth')->name('panel_spot_buy_orderLimit');
Route::post('/spot/order-buy-spot-Limit-delete','User\Panel\Spot\SpotController@orderBuyLimitDelete')->middleware('userAuth')->name('panel_spot_buy_orderLimit_delete');
Route::post('/spot/order-sell-spot-Limit','User\Panel\Spot\SpotController@orderSellLimit')->middleware('userAuth')->name('panel_spot_sell_orderLimit');
Route::post('/spot/order-sell-spot-market','User\Panel\Spot\SpotController@orderSellMarket')->middleware('userAuth')->name('panel_spot_sell_orderMarket');
//*********************************************************************** SPOT ***********************************************************************//

//*********************************************************************** FUTURE ***********************************************************************//
Route::get('/future/smart','User\Panel\Future\FutureController@smartPage')->middleware('userAuth')->middleware('checkpayment')->name('panel_future_smart');
Route::post('/future/get-pairs','User\Panel\Future\FutureController@getPairs')->middleware('userAuth')->name('panel_future_getPairs');
Route::post('/future/get-available','User\Panel\Future\FutureController@getAvailable')->middleware('userAuth')->name('panel_future_getAvailable');
Route::post('/future/calculator/get-available','User\Panel\Future\FutureController@calculatorGetAvailable')->middleware('userAuth')->name('panel_future_calculatorGetAvailable');
Route::post('/future/changeLeverage','User\Panel\Future\FutureController@changeLeverage')->middleware('userAuth')->name('panel_future_changeLeverage');
Route::post('/future/openPosition','User\Panel\Future\FutureController@openPositionLimit')->middleware('userAuth')->name('panel_future_openPositionLimit');
Route::post('/future/delete-future-limit-delete','User\Panel\Future\FutureController@futureLimitDelete')->middleware('userAuth')->name('panel_future_limitDelete');
Route::post('/future/open-market-order','User\Panel\Future\FutureController@futureMarketOpen')->middleware('userAuth')->name('panel_future_marketOpen');
Route::post('/future/close-market-order','User\Panel\Future\FutureController@futureMarketClose')->middleware('userAuth')->name('panel_future_marketClose');
//*********************************************************************** FUTURE ***********************************************************************//
