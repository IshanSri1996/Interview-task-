<!DOCTYPE html>
<html>
<body>


<form action="{{ route('addweight') }}" method="POST" enctype="multipart/form-data">
@csrf
  <label for="fname">Name:</label><br>
  <input type="text" id="name" name="name" placeholder="name"><br>
  <label for="lname">weight:</label><br>
  <input type="text" id="weight" name="weight" placeholder="weight"><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>