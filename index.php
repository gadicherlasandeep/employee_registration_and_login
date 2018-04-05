
<html>
    <head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    font-family: Times New Roman; 
    color:white;
    font-size: 30px;
    font-weight: 400px;
    background-color:#000066;
    
    text-align: center;

}
.profile-img
{
    width: 100px;
    height: 100px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="login-title">Employee Login</h1>
            <div class="account-wall">
                <img class="profile-img" src="pic.jpg" alt="">
                <form class="form-signin" action="check.php">
                    <input type="text" class="form-control" placeholder="Email" required autofocus name="email">
                    <input type="password" class="form-control" placeholder="Password" required name="password">
                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
                
                </form>
            </div>
            <a href="Registration.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>
    </body>
</html>