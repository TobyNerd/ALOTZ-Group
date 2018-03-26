<?php
require_once 'core/init.php';

if(Input::exists()) {
    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'first_name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'last_name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            ),
            'age' => array(
                'required' => true
            ),
            'gender' => array(
                'required' => true
            ),
            'email' => array(
                'required' => true,
                'min' => 2,
                'max' => 256,
                'unique' => 'private_user'
            ),
            'password' => array(
                'required' => true,
                'min' => 5,
                'max' => 32
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            )
        ));

        if($validation->passed()) {
            $user = new User();

            $salt = Hash::salt(32);

            try {

                $user->create(array(
                    'first_name' => Input::get('first_name'),
                    'last_name' => Input::get('last_name'),
                    'age' => Input::get('age'),
                    'gender' => Input::get('gender'),
                    'email' => Input::get('email'),
                    'password' => Hash::make(Input::get('password'), $salt),
                    'salt' => $salt
                ));

                Session::flash('home', 'You have been successfully registered and can now log in!');
                Redirect::to('index.php');

            } catch(Exception $e) {
                die($e->getMessage());
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
        <label for "first_name">First name</label>
        <input type="text" name="first_name" id="first_name" value="<?php echo escape(Input::get('first_name')); ?>" autocomplete="off">
    </div>

    <div class="field">
        <label for "last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo escape(Input::get('last_name')); ?>" autocomplete="off">
    </div>

    <div class="field">
        <label for "age">Date of birth</label>
        <input type="text" name="age" id="age" value="" autocomplete="off">
    </div>

    <div class="field">
        <label for "gender">Gender</label>
        <input type="text" name="gender" id="gender" value="" autocomplete="off">
    </div>

    <div class="field">
        <label for "email">E-mail</label>
        <input type="text" name="email" id="email" value="<?php echo escape(Input::get('email')); ?>" autocomplete="off">
    </div>

    <div class="field">
        <label for "password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="field">
        <label for "password_again">Confirm password</label>
        <input type="password" name="password_again" id="password_again">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Register user">
</form>