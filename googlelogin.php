<html>
<head>
    <title>Google Authentication</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center>
     <button type="button" id="googlebtn" onclick="GoogleLogin();"></button>
 </center>
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase.js"></script>
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
</script>
<script>

    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login

        window.location="dashboard.php";
    }).catch(function (error) {
        var errorMessage=error.message;
        alert(errorMessage);
    });
</script>
</body>
</html>