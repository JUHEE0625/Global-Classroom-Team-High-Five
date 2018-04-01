

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>CodePen - Meterialize Login Form + jquery validation example</title>



  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

  <link rel="stylesheet" type="text/css" href="css/login.css">

  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <!-- <img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login"/> -->
            <p class="center login-form-text">LOGIN</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="mdi-social-person-outline prefix"></i> -->
            <i class="material-icons prefix">account_circle</i>
            <input id="username" name="username" type="text" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;); cursor: auto;"/>
            <label for="username" data-error="wrong" class="center-align" data-success="right">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <!-- <i class="mdi-action-lock-outline prefix"></i> -->
            <i class="material-icons prefix">vpn_key</i>
            <input id="password" name="password" type="password" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII=&quot;);"/>
            <label for="password">Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 login-text">
		      <input type="checkbox" id="test6" checked="checked" />
		      <label for="test6" class="pointer-events">Remember me</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
    <script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js'></script>
<link rel="javascript" type="text/javascript" href="js/login.js">





</body>

</html>
