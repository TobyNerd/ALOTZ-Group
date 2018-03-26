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

<form action="" method="post">
    <div class="field">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" autocomplete="off">
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="off">
    </div>

    <div class="field">
        <label for="remember">
            <input type="checkbox" name="remember" id="remember"> Remember me
        </label>
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>"> 
    <input type="submit" value="Sign in">
</form>