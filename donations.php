
<!DOCTYPE html>
<html>
      <head>
      <meta charset="utf-8">
      <title>DONATIONS</title>
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
        <div id="main" class="main col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <h1 style="text-align: center;">CHARITY FOUNDATION</h1>
            <br><br>
            <hr>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>


        <div id="contactus" class="offerbox col-lg-10 col-md-10 col-sm-10 col-xs-12">
            <br><br>

            <form action="includes/signup.incs.php" method="POST">

                <!--Name-->
                <div class="form-group">
                    <label for="name">First Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="first" required>
                </div>

                <!--Surname-->
                <div class="form-group">
                    <label for="surname">Last Name:</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="last">
                </div>

                <!--Email-->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                </div>




               





                <!--Radio for choosing type of card-->
                <br>
                <div class="box">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                     <p> Visa card &nbsp;<input type="radio" class="form-check-input" name="card" value="visa"></p>
                         
                         </label>
                    </div>


                    <div class="form-check-inline">
                        <label class="form-check-label">
                       <p> Master card &nbsp; <input type="radio" class="form-check-input" name="card" value="mastercard"></p>
                        
                            </label>
                    </div>
                </div>


                <!--Card number-->
                <br>
                <div class="form-group">
                    <label for="name">Card number:</label>
                    <input type="number" class="form-control" name="number" maxlength="16" minlength="16" required placeholder="0000 0000 0000 0000">
                </div>


                 <div class="form-group">
                    <label for="name">Donation:</label>
                    <input type="text" class="form-control" placeholder="Enter how many money you will donate" name="money" required>
                </div>
                 <br>
                <button type="submit" name="submit"> Sign up </button>
            <br><br>
        </div>
  


</body>
<footer>
<div>
&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-location-arrow"> KARIMA ZAIMOVIĆA 8, ILIDŽA</i>
</div>
</footer>
</html>


