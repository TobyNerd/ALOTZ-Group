<?php
require_once 'core/init.php';

if(Input::exists()){
    if(Token::check(Input::get('token'))) {

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'email'     => array('required' => true),
            'password'  => array('required' => true)
        ));

        if($validation->passed()) {
            $user = new User();

            $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->login(Input::get('email'), Input::get('password'), $remember);

            if($login) {
                Redirect::to('index.php');
            } else {
                echo '<p>Sorry, signing in failed</p>';
            }

        } else {
            foreach($validation->errors() as $error) {
                echo $error, '<br>';
            }
        }

    }
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
        Physiosearch
        </title>
    </head>

    <body>
        <?php include 'header.php' ?>
        <div class="backgroundImage">
        </div>

        <div class="login-box">
            <img src="media/avatar.png" class="avatar">
            <h1>Sign in</h1>
            <form action="" method="post">
                
                <p>E-mail</p>
                <input type="text" name="email" id="email" autocomplete="off">
                
                <p>Password</p>
                <input type="password" name="password" id="password" autocomplete="off">
                
                <label for="remember">
                <input type="checkbox" name="remember" id="remember">Remember me
                </label>
                
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                <input type="submit" value="Sign in">
            </form>
        </div> 
    </body>
</html>

