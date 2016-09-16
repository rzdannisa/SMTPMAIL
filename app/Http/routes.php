<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('ajax/send', function() 
{
	$options = array(
		'encrypted' => false
		);
	$pusher = new \Pusher(
		'b8dbe2c70588a5009c74',
		'd31ad9cedbcc20a2f4db',
		'232906',
		$options
		);
	$data['name'] = Input::get('name');
	$data['message'] = Input::get('message');
	$pusher->trigger('chat', 'chat_xiirpl', $data);

	echo json_encode($data);
});

Route::get('email','SMTPController@email');
Route::post('sendemail', 'SMTPController@send_mail');