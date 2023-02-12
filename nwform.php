<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>
<style>
    body {
        color: whitesmoke;
    }
    
    * {
        margin: 0;
        padding: 0;
    }
    
    body {
        background: #387ddf;
        overflow: hidden;
    }
    
    .container {
        justify-content: center;
        align-items: center;
        display: flex;
    }
    
    .main {
        width: 370px;
        height: 500px;
        background: rgba( 255, 255, 255, 0.2);
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37);
        backdrop-filter: blur( 18.5px);
        -webkit-backdrop-filter: blur( 18.5px);
        border-radius: 10px;
        border: 1px solid rgba( 255, 255, 255, 0.18);
        margin-top: 80px;
    }
    
    .main2 {
        color: whitesmoke;
    }
    
    input {
        border: 2px solid whitesmoke;
    }
</style>

<body>
    <form action="index.php" method="post">

        <div class="container">

            <div class="main">


                <p style="transform: translate(150px,20px);"><i style="font-family: cursive;">Already have an account</i>
                    <a href="#">
                        <font color="darkred"><b>sign in</b></font>
                    </a>
                </p><br>
                <p>
                    <h3 style="transform: translate(35px,0);"><b> Have a question about this Website..</b></h3>
                </p>
                <p>
                    <h6 style="transform: translate(20px,0);">
                        Have a question about this website? Sign in u for account to <br>open and contact list maintems.
                    </h6>
                </p>
                <h5 style="transform: translate(20px,0px);">Pick a Name</h5>
                <input type="text" placeholder="Enter your Name" pattern="[A-Z]*" name="name" style="background-color: transparent; width: 330px; height: 30px; transform: translate(20px,0); " required>

                <h5 style="transform: translate(20px,0px);">E-mail</h5>
                <input type="email" placeholder="Enter your E-Mail" name="email" style="background-color: transparent; width: 330px; height: 30px; transform: translate(20px,0);" required >

                <h5 style="transform: translate(20px,0px);">Password</h5>
                <input type="password" placeholder="Enter your password" name="password" pattern="[0-9]*" style="background-color: transparent; width: 330px; height: 30px; transform: translate(20px,0);" required>
                <br><br>
                <input type="submit" style="width: 330px; height: 30px; transform: translate(20px,0); background-color: rgb(228, 66, 66)">
                <br><br>
                <p>
                    <h5 style="transform: translate(20px,0);"> By clicking "sign up", you agree to our
                        <a href="#">
                            <font color="darkred"><b> term of service</b></font>
                        </a><br> and
                        <a href="#">
                            <font color="darkred"><b>Privacy statment.</b></font>
                        </a>
                    </h5>
                </p>
            </div>
        </div>

        </div>

    </form>


    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js "></script>
</body>

</html>