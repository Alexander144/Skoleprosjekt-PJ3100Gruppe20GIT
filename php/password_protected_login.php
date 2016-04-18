<html>
    <head>
        <title>Tung?</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/mobil.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <script src="https://use.typekit.net/zjw7zcq.js"></script>
        <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <!--End favicon-->
<script>try{Typekit.load({ async: true });}catch(e){}</script>
    </head>
    <body>
   
        <div id="loginOther" class="col col-6 login">
            <div class="objectsInDiv">
                <h1>Login</h1>
                <form action="includes/process_login.php" method="post" name="login_form">

                    Brukernavn: <input id="brukernavnLogin" class="textField" type="text" name="email"/>
                        <br><br>
                    Passord: <input id="passordLogin" class="textField" type="password" name="password"/>
                        <br><br>
                    <input id="loginBtn" class="buttonDesign" type="button"
                           value="Login"
                           onclick="validate()" />
                </form>
            </div>
        </div>
        
    </body>
    
    <script>
        
        function validate(){
            var username = document.getElementById("brukernavnLogin").value;
            var password = document.getElementById("passordLogin").value;
            
            if (username == "loginWOACT" && password == "1234"){
                alert("hei");
                window.location = "index.php";
                return false;
            } else{
                alert("feil passord");
            }
        }
    </script>
    
</html>

