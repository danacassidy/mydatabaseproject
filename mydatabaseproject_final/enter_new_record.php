<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title class="font-weight-bold"> Local News Database - Enter </title>
    <link rel="stylesheet"  href="css/main.css">
</head>
<body>

<div id="container">
<h1>Local News Database: Enter Newspapers</h1>
<div style= "margin: 5%"></div>
<button class="btn btn-dark"><a href="inventory_update.php">View full database</a></button>
<div style= "margin: 5%"></div>
<div id="newspapers">
<!-- this form is handled by the JavaScript file linked at bottom -->
<div class="form">

<form id="newspaperform" method="post" action="" autocomplete="off">


<div >
  <label for="newspaper" class="col-sm-2 col-form-label"> Newspaper </label>
	<input type="text" name="newspaper" id="newspaper" maxlength="200" required>
</div>

<div>
<label for="state" class="col-sm-2 col-form-label"> State </label>
    <select class ="btn btn-light btn-sm dropdown-toggle"name="state" id="state" required>
      <option value="AL">Alabama</option>
    	<option value="AK">Alaska</option>
    	<option value="AZ">Arizona</option>
    	<option value="AR">Arkansas</option>
    	<option value="CA">California</option>
    	<option value="CO">Colorado</option>
    	<option value="CT">Connecticut</option>
    	<option value="DE">Delaware</option>
    	<option value="DC">District Of Columbia</option>
    	<option value="FL">Florida</option>
    	<option value="GA">Georgia</option>
    	<option value="HI">Hawaii</option>
    	<option value="ID">Idaho</option>
    	<option value="IL">Illinois</option>
    	<option value="IN">Indiana</option>
    	<option value="IA">Iowa</option>
    	<option value="KS">Kansas</option>
    	<option value="KY">Kentucky</option>
    	<option value="LA">Louisiana</option>
    	<option value="ME">Maine</option>
    	<option value="MD">Maryland</option>
    	<option value="MA">Massachusetts</option>
    	<option value="MI">Michigan</option>
    	<option value="MN">Minnesota</option>
    	<option value="MS">Mississippi</option>
    	<option value="MO">Missouri</option>
    	<option value="MT">Montana</option>
    	<option value="NE">Nebraska</option>
    	<option value="NV">Nevada</option>
    	<option value="NH">New Hampshire</option>
    	<option value="NJ">New Jersey</option>
    	<option value="NM">New Mexico</option>
    	<option value="NY">New York</option>
    	<option value="NC">North Carolina</option>
    	<option value="ND">North Dakota</option>
    	<option value="OH">Ohio</option>
    	<option value="OK">Oklahoma</option>
    	<option value="OR">Oregon</option>
    	<option value="PA">Pennsylvania</option>
    	<option value="RI">Rhode Island</option>
    	<option value="SC">South Carolina</option>
    	<option value="SD">South Dakota</option>
    	<option value="TN">Tennessee</option>
    	<option value="TX">Texas</option>
    	<option value="UT">Utah</option>
    	<option value="VT">Vermont</option>
    	<option value="VA">Virginia</option>
    	<option value="WA">Washington</option>
    	<option value="WV">West Virginia</option>
    	<option value="WI">Wisconsin</option>
    	<option value="WY">Wyoming</option>
      <option value="AS">American Samoa</option>
      <option value="GU">Guam</option>
      <option value="MP">Northern Mariana Islands</option>
      <option value="PR">Puerto Rico</option>
      <option value="UM">United States Minor Outlying Islands</option>
      <option value="VI">Virgin Islands</option>
      <option value="AA">Armed Forces Americas</option>
      <option value="AP">Armed Forces Pacific</option>
      <option value="AE">Armed Forces Others</option>
    </select>
</div>

<div>

    <label for="city" class="col-sm-2 col-form-label">City </label>
  <input type="text" name="city" id="city" maxlength="100" required>
</div>

<div >
  <label for="website_link" class="col-sm-2 col-form-label">Link to website </label>
  <input type="text" name="website_link" id="website_link" maxlength="100" required>
</div>


    <!-- step="0.01" (above) allows decimal to be entered -->
<div style="margin:5%">
<input class="btn btn-light" type="submit" id="submit" value="Submit" >
</div>
</form>
</div>
<!-- close the form -->
<div >
  </div>
</div> <!-- close #newspapers -->
<!-- empty div -->
<button class="btn btn-dark"><a href="inventory_update.php">View full database</a></button>

<div id="response"></div>
</div> <!-- close container -->
<script src="js/enter.js"></script>
</body>
</html>
