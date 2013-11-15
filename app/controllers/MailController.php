<?php

class MailController extends BaseController{

	public function email()
	{
	    $email = Input::get('email');
	    $mensaje = Input::get('mensaje');
	    Mail::send('emails.auth.mail', $data = ['msg' => $mensaje,'mail' => $email ], function($message) {
	    	$message->from( Input::get('email'), '');

        	$message->to('info@nedblu.com', 'Name')->subject( 'Contacto desde NedBlu...' );

	        // $message->to('info@nedblu.com');
	        // $message->subject('test de mail');
	    });
	    // return 'Enviando email...' . '    ' . $email . '   ' . $mensaje;
	}
	
}