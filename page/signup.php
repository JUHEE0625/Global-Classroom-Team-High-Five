


<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Register</title>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="stylesheet" type="text/css" href="../css/temp2.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js" ></script>
<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<script type="text/javascript" src="../js/mySignupForm.js"></script>
	<link href="http://cdn.layoutit.com/css/app.min-af7c774190.css" rel="stylesheet">


</head>

<body class="fontbody" style="overflow:scroll; background-image : url(https://exp.cdn-hotels.com/hotels/2000000/1200000/1194500/1194461/61b5b4c0_z.jpg);background-repeat: no-repeat;;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; " >
	<nav  class="navbar navbar-default" role="navigation" style="margin-top :-10px;margin-left:-5px;magin-right:-100px ">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">

	    <a class="navbar-brand" href="#" style="margin-top : 15px;  font-size: 1.5rem;">HOME</a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:#111751;width:1460px; magin-right:-100px">
	    <ul class="nav navbar-nav" style="margin-top : 15px">

	      <li ><a  href="#">ABOUT</a></li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">OFFERS<b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="#" >Histroy</a></li>
	          <li><a href="#">Room</a></li>
	          <li><a href="#">Service</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Links</a></li>
	          <li class="divider"></li>
	          <li><a href="#">Travel Site</a></li>
	        </ul>
	      </li>
	      <li><a href="#">LOGIN</a></li>

	    </ul>

	    <ul class="nav navbar-nav navbar-right" style="magin-right:0px">
	          <li ><a href="#" ><img src="http://hiltonsurfersparadise.com.au/app/themes/FoundationPress/assets/images/hilton-logo.png" height=40></a></li>
	      <li><a href="#" style="margin-top : 15px">MyPage</a></li>
	        <li><a href="#"> </a></li>
	    </ul>
	  </div><!-- /.navbar-collapse -->
	</nav>

		</div>
	</div>


  <form name="signUp" action="./memberSave.php" method="post" onsubmit="return checkSubmit()">
	  <div class="modal fade" id="layoutitModal" tabindex="-1" role="dialog" aria-labelledby="layoutitModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content"></div>
		</div>
	</div>
<div class="signUpForm">
  <div id="login-page" class="row">
  <div class="col s12 z-depth-4 card-panel">
    <form class="login-form">
      <div class="row">
        <div class="input-field col s12 center">
          <h4>Register</h4>
          <p class="center">Join to our community now !</p>
        </div>

      </div>
			<div class="row margin">
		 <div class="input-field col s12">

		  </div>
		 </div>
		 <div class="row margin" id="usertype">


	   <select class="browser-default" style="margin-left:15px;width:250px">
	     <option value="" disabled selected>Choose User Type</option>
	     <option value="1">Customer</option>
	     <option value="2">Reception</option>
	     <option value="3">Administrator</option>
	   </select>
		 </div>
      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-social-person-outline prefix"></i> -->
          <i class="material-icons prefix">account_circle</i>
          <input id="username" name="username" type="text"/>
          <label for="username">User Name</label>
        </div>
      </div>
			<div class="row margin">
				<div class="input-field col s12">
					<!-- <i class="mdi-social-person-outline prefix"></i> -->
					<i class="material-icons prefix">local_phone</i>
					<input id="userPhone" name="userPhone" type="text"/>
					<label for="userPhone">Phone</label>
				</div>
			</div>
      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-social-person-outline prefix"></i> -->
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="email" style="cursor: auto;" />
          <label for="email">Email</label>
                  <div class="memberEmailAddressComment"></div>
        </div>
      </div>
			<div class="row margin">
				<div class="input-field col s12">
					<!-- <i class="mdi-action-lock-outline prefix"></i> -->
					<i class="material-icons prefix">person_add</i>
					<input id="userId" name="userId" type="text" />
					<label for="user_id">ID</label>
                        <div class="memberIdComment"></div>
				</div>
			</div>
      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-action-lock-outline prefix"></i> -->
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" name="password" type="password" />
          <label for="password">Password</label>
        </div>
      </div>

      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-action-lock-outline prefix"></i> -->
          <i class="material-icons prefix">vpn_key</i>
          <input id="password_a" name="password_a" type="password" />
          <label for="password_a">Password again</label>
              <div class="memberPw2Comment"></div>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <button type="submit" style="  background-color:#141b55 ;"class="btn waves-effect waves-light col s12">REGISTER NOW</button>
    <input type="submit" value="가입하기" class="submit" />
        </div>
        <div class="input-field col s12">
          <p class="margin center medium-small sign-up">Already have an account? <a href="./login">Login</a></p>
        </div>
      </div>


    </form>
  </div>
</div>
</form>
echo
<div class="formCheck">

		<input type="hidden" name="idCheck" class="idCheck" />
		<input type="hidden" name="pw2Check" class="pwCheck2" />
		<input type="hidden" name="eMailCheck" class="eMailCheck" />
</div>
</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js'></script>
<script type="text/javascript">
if(!NREUMQ.f){
  NREUMQ.f=function()
  {
    NREUMQ.push(["load",new Date().getTime()]);
    var e=document.createElement("script");
    e.type="text/javascript";
    e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";
    document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};
    NREUMQ.a=window.onload;window.onload=NREUMQ.f;};
    NREUMQ.push(["nrfj","bam.nr-data.net","0748fcde3e","2111746","M1ZVZxRUDRJZAE0IXgocdlASXAwPFwFMCF0AbEEASVwNBV0b",0,197,new Date().getTime(),"","","","",""]);
  </script>
<link rel="javascript" type="text/javascript" href="js/temp2.js">
</body>

</html>
