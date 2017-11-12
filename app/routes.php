<?php

// Routes
Flight::route('/', function() {
	Flight::render('demo.twig', ['aVariable' => 'Wow']);
});

// Not Found
Flight::map('notFound', function(){
	Flight::render(
		'404.twig',
		[
			'requestedPage' => $_SERVER["REQUEST_URI"]
		]);
});
