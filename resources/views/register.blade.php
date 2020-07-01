<!DOCTYPE html>
<html>
<head>
	<title>SanberBook</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="{{url('welcome')}}" method="POST">
@csrf
<p>First name:</p>
<input type="text" name="fname">
<p>Last Name:</p>
<input type="text" name="lname">
<p>Gender:</p>
<input type="radio">
<label for="">Male</label><br>
<input type="radio">
<label for="">Female</label><br>
<input type="radio">
<label for="">Other</label>
<p>Nationality:</p>
<select>
	<option value="">Indonesian</option>
	<option value="">Singapore</option>
	<option value="">Malaysian</option>
</select>
<p>Language Spoken:</p>
<input type="checkbox">
<label for="">Bahasa Indonesia</label><br>
<input type="checkbox">
<label for="">English</label><br>
<input type="checkbox">
<label for="">Other</label>
<p>Bio:</p>
<textarea name="" id="" cols="30" rows="10"></textarea><br>
<input type="submit" value="Sign Up">
</form>
</body>
</html>