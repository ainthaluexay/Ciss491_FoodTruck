<!DOCTYPE html>
<html lang = "en">
<head>
  <meta charset="utf-8">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1 shrink-to-fit = no">
  <body style="background-color: rgb(222, 220, 226);">
     <div class="navbar">
    <a href="homePage.html">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Menu
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="menuPage.html">Food</a>
        <a href="locationPage.html">Locations</a>
        <a href="loginPage.html">Login</a>
      </div>
    </div>
  </div>

<br>
<br>
<br>
<br>
<br>
<br>

<center>
   <main id="main-holder">
    <h1 id="login-header">Login</h1>
    
    <div id="login-error-msg-holder">
    </div>
    
    <form id="login-form">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
      <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
     <br>
  <br>
   <input type="submit" value="Login" id="login-form-submit">
    </form>

  </main>     
  <br>
  <br>
  <br>
  <br>
      
  <br>
  <br>
  <br>
  <br>
    <img alt="Logo" src="foodTruck.jpg" height="250"class="contact pull-left mr-3">
  </div>


</center>

<style>
  body {font-family: Arial, sans-serif;}
  h1,h2,h3,h4,h5,h6 {font-family:serif; letter-spacing:5px}
    .navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: rgb(254, 255, 255);
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; 
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: rgb(238, 223, 241);
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #d2c6dd;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: rgb(255, 251, 251);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {
  background-color: rgb(50, 53, 52);
}


.dropdown:hover .dropdown-content {
  display: block;
} 

aside {
  width: 30%;
  padding-left: 15px;
  margin-left: 15px;
  float: right;
}

footer {
  width: 10%;
  padding-left: 15px;
  margin-left: 15px;
  float: center;
}
body {
  height: 100%;
  margin: 0;
  font-family: Arial, sans-serif;
  display: grid;
  justify-items: center;
  align-items: center;
    background-color: #dfe3e6;
}

#main-holder {
  width: 75%;
  height: 70%;
  display: grid;
  justify-items: center;
  align-items: center;
  background-color: white;
  border-radius: 17px;
  box-shadow: 0px 0px 5px 2px black;
}

#login-error-msg-holder {
  width: 100%;
  height: 100%;
  display: grid;
  justify-items: center;
  align-items: center;
}

#login-error-msg {
  width: 23%;
  text-align: center;
  margin: 0;
  padding: 5px;
  font-size: 12px;
  font-weight: bold;
  color: #8a0000;
  border: 1px solid #8a0000;
  background-color: #e58f8f;
  opacity: 0;
}

#error-msg-second-line {
  display: block;
}

#login-form {
  align-self: flex-start;
  display: grid;
  justify-items: center;
  align-items: center;
}

.login-form-field::placeholder {
  color: #3a3a3a;
}

.login-form-field {
  border: none;
  border-bottom: 1px solid #3a3a3a;
  margin-bottom: 10px;
  border-radius: 3px;
  outline: none;
  padding: 0px 0px 5px 5px;
}

#login-form-submit {
  width: 100%;
  padding: 7px;
  border: none;
  border-radius: 5px;
  color: white;
  font-weight: bold;
  background-color: #8697a7;
  cursor: pointer;
  outline: none;
}
  </style>

<br>
<br>
<center><footer class = "bg-success text-center">
<p>Checkout the Creators:Amee Inthaluexay<br>Ayushi Khadka</p>
<a href="https://www.linkedin.com/in/ainthaluexay">
<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" alt="linkedin logo">
<a href="https://www.linkedin.com/in/ayushi-khadka-1b5403115/">
<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" alt="linkedin logo">
</a>
</a>
  
</footer>		</center>	
</body>
  </html>