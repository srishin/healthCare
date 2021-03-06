<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<title>Dashboard | Education Center</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="<?php echo base_url()?>assets/css/material/app.css" rel="stylesheet">
	<style type="text/css">


	</style>
	
</head>

<body class="page ">
	     
            <header>
              <div id="menu">
                <div class=" container top-nav">
                  
                  <a href="index.html">
                  <img src="images/logo.png" alt="Erudo" class="img-responsive" width="60">
                  </a>
                  <div class="p-lg menu-icon"><a class="p-lg" href="#side-nav"><i class="material-icons">menu</i></a></div>
                  <div class="pull-right">
                  	

                 

                  </div>

                </div>
                <div class="row well p0" id="side-nav">
                  <div class="text-right p-lg">
                    <a class="btn-link close-nav" href="#">
                      <i class="material-icons">clear</i>
                    </a>
                  </div>
                  <ul class="list-group menu-list" >
                    <li class="user-block">
                      <a href="" ><img class="img-fluid center-block img-circle" src="http://lorempixel.com/64/64/people/1" alt="Erudo User"/></a>
                      <h4 class="text-center">User</h4>
                    </li>
                    <a href="<php echo site_url('Patient')?>" class="list-group-item withripple btn-block active">Home</a>
                    <a href="<php echo site_url('Patient/fixappoinment')?>" class="list-group-item withripple btn-block">Apponments</a>
                    <a href="<php echo site_url('Patient/profile')?>" class="list-group-item withripple btn-block">Profile</a>
                    <a href="<php echo site_url('Account/patient')?>" class="list-group-item withripple btn-block">Account</a>
                    <a href="<php echo site_url('Account/patient')?>" class="list-group-item withripple btn-block">Logout</a>
                  </ul>       
                </div>
              </div>
            </header>




	<!-- Body -->

			

					