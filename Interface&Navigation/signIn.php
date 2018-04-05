<!doctype html>

<!-- It all starts with the html tag, better respect yo' -->
<html>

    <!-- Within the head tag we put edit styles with CSS and put key info like title of the webpage' -->
    <head>
      <meta charset="utf-8">

      <!-- the title is what appears on the actual tab within the browser -->
      <title>
      Physiosearch
      </title>

    </head>

    <body>
      <!-- we include the php script header.php which contains pictures like the logo and background --> 
      <?php include 'header.php' ?>

      <div class="container center cover">
        <div class="row">

           <!-- Adds the central text above searchbar. It's ID is "h1" as its a h1 type header.--> 
          <div class="col m12">
            <h1>Sign In</h1>
          </div>
        </div>
        
          <!-- Adds the stylized search bar. It's ID is "search-bar-cover" --> 
          <div class="col m4">
            <input placeholder="E-mail" id="email-prompt" type="text" class="validate center">
            <label for="login-cover"></label>
          </div>
          <div class="col m4">
            <input placeholder="Password" id="password-prompt" type="text" class="validate center">
            <label for="login-cover"></label>
          </div>
          
          <!-- Adds the stylized button "search" --> 
          <div class="col m12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Sign In

            </button>
          </div>

        </div>
      </div>

    <div class="backgroundImage">
    </div>

    </body>
</html>