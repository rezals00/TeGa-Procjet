<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title><?=$Site->nama;?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />

  <link rel="stylesheet" media="all" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" />
  <link rel="stylesheet" media="all" href="<?=base_url();?>/cdn/css/custom.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-blue navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url();?>/Main"><?=$Site->nama;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="<?=base_url();?>Main/Balance">Balance</a></li>
          <li><a href="<?=base_url();?>Main/History">History</a></li>
            <li><a href="<?=base_url();?>Main/Profile"><?=$this->Users->getUname();?> - Rp.<?=number_format($this->Users->getSaldo(), 0 , "." , ".");?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> <br><br><br>
    <br><br>
    <div class="container">
    <div class="rows">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
    	<div class="panel panel-blue">
    	<div class="panel-heading">Order</div>
    	<div class="panel-body">
    	<select class="form-control">
    	<?php
    	foreach($this->Service->list() as $list) { ?>
    	<option value="<?=$list->id;?>"><?=$list->name;?></option>
    	<?php } ?>
    	</div>
    	</div>
    </div>
    <div class="col-lg-4"></div>
    </body>
    </html>