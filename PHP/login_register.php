<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../STYLE/style.css">
    <link rel="stylesheet" href="../STYLE/stylefooter.css">
    <link rel="stylesheet" href="../STYLE/styleheader.css">
    <title>Login en registratie</title>
</head>
<body>

    <?php include '../PARTICLE/header.php' ?>

    <section class="containerlr" id="signUp" style="display:none;" >
        <h1 class="form-title">Register </h1>
        <form method="post" action="../PHP/register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="Fname" id="Fname" placeholder="First Name" required>
                <label for="Fname">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id=lName placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
           <input type="submit" class="btn" value="Sign Up" name="signUp" >
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
           <i class="fab fa-google"></i>
           <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </section>

    <section class="containerlr" id="signIn" >
        <h1 class="form-title">Sign In </h1>
        <form method="post" action="../PHP/register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
           <input type="submit" class="btn" value="Sign In" name="signIn" >
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
           <i class="fab fa-google"></i>
           <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </section>
    <script src="../JVS/login_register.js"></script>

  



    
    
</body>
</html>