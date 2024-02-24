<?php

	// Session Controller
	session_start();

	// Variables
	$root = $_SERVER['DOCUMENT_ROOT'];

	// Required Models
	require_once 'constants.php';
	require_once './models/general.php';
	require_once './models/content.php';
	/* require_once './models/paperwork-generators.php'; */
	require_once 'session-variables.php';

	// Classes
	$g = new General();
	$c = new Content();
	/* $pg = new PaperworkGenerators();
	$ar = new ArrestReportGenerator();
	$pt = new ParkingTicketGenerator();
	$da = new LSDAGenerator(); */