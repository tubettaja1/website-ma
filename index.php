<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.16.0/firebase-app.js"></script>

<!-- include firebase -->
<script src="https://www.gstatic.com/firebasejs/7.16.0/firebase-database.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.16.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDpssZuu_Y9NcMQ87voYg1N0VdjajaeCWw",
    authDomain: "my-test-project-cb1a8.firebaseapp.com",
    databaseURL: "https://my-test-project-cb1a8.firebaseio.com",
    projectId: "my-test-project-cb1a8",
    storageBucket: "my-test-project-cb1a8.appspot.com",
    messagingSenderId: "70545060870",
    appId: "1:70545060870:web:0ecfcc19e70110e730bf87",
    measurementId: "G-FVZTR3ZBV1"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var myName = prompt("Enter Your Name");

  function sendMessage() {

      var message = document.getElementById("messaage")

      firebase.database().ref("messages").push().set({
          "sender": myName,
          "message": message
      }); 

      return dalse;
</script>

<!-- create a form to send message -->
<form onsubmit="return sendMessage();">
    <input id="messaage" placeholder="Enter message" autocomplete="off">

    <input type="submit">

</form>
