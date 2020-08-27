<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="style.css">
        <title>Facebook Auth</title>
    </head>
    <body>
        <div style="text-align:center;" id="user-image">    
        </div>
        <h1 style="text-align:center;" id="user-email">
        </h1>
        <button style="display:none;text-align:center" onclick="signout()" id="sign-out"></button>
      <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>
	  <script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>
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
    // function signin()
    // {
    var provider = new firebase.auth.FacebookAuthProvider();
    provider.addScope('user_birthday,email');
    firebase.auth().useDeviceLanguage();
    firebase.auth().signInWithPopup(provider).then(function(result) {
  // This gives you a Facebook Access Token. You can use it to access the Facebook API.
   var token = result.credential.accessToken;
    console.log(token);
  // The signed-in user info.
    document.querySelector("#sign-out").style.display="block";
    console.log(user);
    var user = result.user;
    console.log(user.email);
    var userImage = document.querySelector("#user-image");

  // appending the user profile image

    var userPic = document.createElement("img");
    userPic.src=user.photoURL;
    userImage.append(userPic);

  // appending the user email address

    var userEmail = document.querySelector("#user-email");
    userEmail.innerHTML = user.email;
    window.location="dashboard.php";

  // ...
  }).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // The email of the user's account used.
  var email = error.email;
  // The firebase.auth.AuthCredential type that was used.
  var credential = error.credential;
  // ...
});
  </script>

</body>
</html>