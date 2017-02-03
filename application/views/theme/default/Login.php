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
            <li><a href="<?=base_url();?>">Back</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    <br><br><br>
   <h3>Register</h3>
   <div class="panel panel-blue">
   <div class="panel-heading">Register</div>
   <div class="panel-body">
   <form method="post" id="login" onsubmit="return false;">
   <label>Username</label>
   <input type="text" id="username" class="form-control" placeholder="Username"> <br>
   <div class="divider"></div>
   <label>Password</label>
   <input type="password" id="password" class="form-control" placeholder="Password"> <br>
   <button class="btn blue btn-block" id="login" type="submit">Login</button>
   </form> <br>
   <?php if($Site->register == '1'){ ?> <a href='/Main/Register' class='btn btn-success'>Register</a><?php } ?>
   <a href='/Main/Forgot' class='btn btn-danger'>Lupa Password ?</a>
   </div>
    </div>
</body>
<script type="text/javascript">
	$("form").submit(function(event) {
		$("input").attr('readonly', 'true');
		var username = $("#username").val();
		var password = $("#password").val();
		$.ajax({
			url: '<?=base_url();?>/Main/Login',
			type: 'POST',
			dataType: 'json',
			data: "username="+username+"&password="+password+"&code=<?=md5(rand(1,9999));?>",
		})
		.done(function(msg) {
			if(msg.result == true){
				window.location.assign('<?=base_url();?>/Main/');
			} else {
				alert(msg.msg);
			}
			$("input").removeAttr('readonly')
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
</script>
</html>