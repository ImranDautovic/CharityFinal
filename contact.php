
<!DOCTYPE html>
<html>
      <head>
      <meta charset="utf-8">
      <title>CONTACT</title>
	  <script src="https://kit.fontawesome.com/2d23f9a9cd.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		

      <link rel="stylesheet" type="text/css" href="index.css">
	  </head>
      <body>
	  
	  <nav class="navbar navbar-expand-sm "style ="background-color:rgba(0,0,0,0.8);">

      <a class="nav-link" href="index.html" style ="color:white;">HOME</a>
  
      <a class="nav-link" href="donations.html"style ="color:white;">DONATIONS</a>

      <a class="nav-link" href="what.html"style ="color:white;">WHAT'S NEW?</a>
 
      <a class="nav-link" href="contact.html"style ="color:white;">CONTACT</a>
	  </nav>
	
	  <br/>
   <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div id="contactus" class=" offerbox col-md-10 col-sm-10 col-xs-12">
            <br><br>
   
           

            <!--Form-->
            <form action="includes/signup.inc.php" method="POST">
                <div class="form-group">
                    <label for="name">First Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="first" required>
                </div>

                <div class="form-group">
                    <label for="surname">Last Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="last">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="question">Message:</label>
                    <textarea class="form-control" rows="10" name="message" placeholder="Write a message" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br><br>
        </div>
    </div>


   

</body>
 <footer >
<div>
<div class="rows">
  <div class="columns">
&nbsp;<p> Working hours: </p>
<ul>
<li>Monday: 08:00-20:00</li>
<li>Tuesday: 08:00-20:00</li>
<li>Wednesday: 08:00-20:00</li>
<li>Thursday: 08:00-20:00</li>
<li>Friday: 08:00-20:00</li>
<li>Saturday: 10:00-18:00</li>
<li>Sunday: 12:00-16:00</li>

</ul>
</div>
<div class="columns">
<div class="mapouter"><div class="gmap_canvas"><iframe width="451" height="218" id="gmap_canvas" src="https://maps.google.com/maps?q=karima%20zaimovica%208&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-search-engines/">google online search</a></div><style>.mapouter{position:relative;text-align:right;height:218px;width:451px;}.gmap_canvas {overflow:hidden;background:none!important;height:218px;width:451px;}</style></div>
</div>
</div>
</footer>
</html>