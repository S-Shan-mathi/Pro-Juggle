<!DOCTYPE html>
<html>
<html>
<head>
    <title>Phone Number Authentication</title>
</head>
<body><center>
<div style="background-image: url('img/img6.jpg');">
<h1>Enter number to create account</h1>
<form action="dashboard.html">
    <input type="text" id="number" placeholder="+91**********">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code"><br>
    <button type="button" onclick="codeverify();">Verify code</button>

</form>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script> -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDIkxgdT4vNSbSEFYWqw-PrqgvYudT9unE",
    authDomain: "projuggle.firebaseapp.com",
    databaseURL: "https://projuggle.firebaseio.com",
    projectId: "projuggle",
    storageBucket: "projuggle.appspot.com",
    messagingSenderId: "73591036201",
    appId: "1:73591036201:web:d42875726a649ff2b5bf38",
    measurementId: "G-MHS21XLQ4W"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</center>
</body>
</div>
</html>