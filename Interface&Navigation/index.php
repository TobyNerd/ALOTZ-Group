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
            <h1>Search for physiotherapists all around Denmark</h1>
          </div>

          <!-- Adds the stylized search bar. It's ID is "search-bar-cover" --> 
          <div class="col m12">
            <input placeholder="Try 'Aalborg' or 'Nordjylland" id="search-bar-cover" type="text" class="validate center">
            <label for="search-cover"></label>
          </div>
          
          <!-- Adds the stylized button "search" --> 
          <div class="">
            <button class="btn waves-effect waves-light" type="submit" name="action">search
              <i class="material-icons fa fa-search right"></i>
            </button>
          </div>

        </div>
      </div>

    <div class="backgroundImage">
    </div>

    </body>
</html>
