<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta property="og:image" content="https://www.spacemining.io/assets/images/og-image.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noodp">
  <title>Sign In – SpaceMining</title>
  <meta name="description" content="Cheap Bitcoin Cloud Mining">
  <meta name="theme-color" content="#ff4747">
  <link rel="canonical" href="https://www.spacemining.io/sign-in">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i">
  <link rel="stylesheet" href="/assets/styles/icon.css">
  <link rel="stylesheet" href="/assets/styles/idealize.css">
  <link rel="stylesheet" href="/assets/styles/base.css">
  <link rel="stylesheet" href="/assets/styles/style.css">
  <link rel="stylesheet" href="/assets/styles/responsive.css" media="(max-width: 1200px)"> 
 </head>
 <body>
  <header>
   <div id="top">
    <div class="container">
     <a href="/" class="brand sf"><img src="/assets/images/logo-36.png" width="" height="" alt="Logo"></a>
     <nav>
      <ul class="menu sf">
       <li class=""><a href="/" class="sf-b">About SpaceMining</a></li>
       <li class=""><a href="/pricing-plans" class="sf-b">Pricing plans</a></li>
       <li class=""><a href="/referral" class="sf-b">Referral program</a></li>
       <li class=""><a href="/qa" class="sf-b">Questions &amp; Answers</a></li>
       <li class=""><a href="/contact-us" class="sf-b">Contact us</a></li>
       <li class="active"><a href="/sign-in" class="sf-b red">Sign in</a></li>
       <li class=""><a href="/sign-up" class="sf-b red">Sign up</a></li>
       <li><select id="currency"><option value="btc">BTC</option><option value="usd">USD</option><option value="eur">EUR</option><option value="gbp">GBP</option><option value="rub">RUB</option><option value="cny">CNY</option><option value="inr">INR</option><option value="php">PHP</option></select></li>
      </ul>
     </nav>
    </div>
   </div>
  </header>
  <main>
   <div class="light bg">
    <div class="container">
     <h1>Sign in to your account</h1>
    </div>
   </div>
   <div class="container">
    <h2>Access Your Personal Dashboard</h2>
    <p class="center">Sign in to your account now to access your personal dashboard, here you will find all of your mining statistics and account information.</p>
    <div class="auth-input">
     <form id="captcha" method="post">
      <div>
       <label for="user">Username or E-mail</label>
       <input id="user" name="user" placeholder="Username or E-mail" type="text" maxlength="255" spellcheck="false" required>
       <label for="password">Password</label>
       <input id="password" name="password" placeholder="Password" type="password" maxlength="255" spellcheck="false" required>
       <input name="formsubmit" value="true" type="hidden">
       <strong id="formerror"></strong>
       <button class="btn yellow sf" type="button" onclick="validateForm()">Sign in</button>
       <br>
       <div class="g-recaptcha" data-sitekey="6Lcc7DsUAAAAAHZ5xxqiFLsTSD52R5Omk6ERr-zi" data-callback="submitForm" data-size="invisible" data-badge="inline" hidden>
        <div class="grecaptcha-badge" style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;">
         <div class="grecaptcha-logo">
          <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6Lcc7DsUAAAAAHZ5xxqiFLsTSD52R5Omk6ERr-zi&amp;co=aHR0cHM6Ly93d3cuc3BhY2VtaW5pbmcuaW86NDQz&amp;hl=in&amp;v=v1515997865826&amp;size=invisible&amp;badge=inline&amp;cb=jfm0vl3avgx5" width="256" height="60" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
         </div>
         <div class="grecaptcha-error"></div>
         <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
        </div>
       </div>
       <a href="/login-reset">Forgot your password?</a>
      </div>
     </form>
    </div>
   </div>
  </main> 
  <div style="visibility: hidden; position: absolute; width:100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0;">
   <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.5;  filter: alpha(opacity=50)"></div>
   <div style="margin: 0 auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid #ccc; z-index: 2000000000; background-color: #fff; overflow: hidden;">
    <iframe title="tantangan recaptcha" src="https://www.google.com/recaptcha/api2/bframe?hl=in&amp;v=v1515997865826&amp;k=6Lcc7DsUAAAAAHZ5xxqiFLsTSD52R5Omk6ERr-zi&amp;cb=ra3r3jry70xm#zci7aree9uei" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="zci7aree9uei" style="width: 100%; height: 100%;"></iframe>
   </div>
  </div>
 </body>
</html>