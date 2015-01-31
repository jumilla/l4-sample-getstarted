<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Laravel4のロゴが出ます
Route::get('/', function() {
	return View::make('hello');
});

// 例1−1: テキストを返す
Route::get('text', function() {
	Log::debug('例1-1: テキストを返す');

	return '晩御飯はお寿司です。';
});

// 例1−2: 配列を返す
Route::get('json', function() {
	Log::debug('例1−2: 配列を返す');

	return [
		'result' => 'OK',
		'data' => [
			'id' => 7,
			'message' => 'Tomorrow night will be a steak! 明日の夜はステーキです',
			'now' => new DateTime,
		],
	];
});
