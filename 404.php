<!DOCTYPE html>
<html>
<head>
  <title>(404) Page not found</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  
  <style type="text/css">
  body { 
    font-family: 'Open Sans';
    color: #333;
  }

  h1 {
    font-size: 5em;
    margin-bottom: 0;
    padding-right: 2em;
  }

  h2 { 
    font-size: 2em; 
    margin: 0;
  }

  p { 
    font-size: 1.25em; 
    line-height: 1.5em;
  }

  #bear-bearrier {
   max-width: 900px;
   margin-left: auto; 
   margin-right: auto;
   padding-left: 5%;
   padding-right: 5%;
  }



  #bearror-of-bad-news {
    padding-left: .25em;
    display: inline;
  }

  #logo {
    width: 180px;
    float: left;
    display: inline-block;

    padding-right: 1.5em;
    padding-top: 1em;
    margin-bottom: 1.5em;
  }

  #somewhere {
    text-decoration: none;
    color: #006595;
  }

  #somewhere:hover {
    text-decoration: underline;
  }
</style>
</head>

  <body>

    <div id="bear-bearrier">

      <img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_cmyk_small.png">
       
        <h1>404</h1>
        <h2>Something went wrong</h2>
        <p>

          The page that you've tried to access doesn't seem to be available.
          You might have mistyped something, or our site may be experiencing difficulties.

        </p>

        <p><a id="somewhere" href="/">Head back to the homepage.</a></p>


    </div>

  </body>
</html>
