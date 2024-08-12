<!DOCTYPE html>
<html>
<head>
<title>class of the day</title>
<style>
body {
  font-family: sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-color: #f0f0f0;
}

form {
  background-color: white;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(4, 4, 4, 0.8); 
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box; 
}

input[type="submit"] {
  background-color: #444;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer; 
}

button[type="submit"]:hover {
  background-color: green; 
  
}
h1{
    font-family: lucida;
}
</style>
</head>
<body>
<form method="POST" action="action.php"> 
    <h1>Add class</h1>
  <label for="subject">Subject</label> 
  <input type="text" id="subject" name="subject" required>
  <label for="date">date</label>
  <input type="date" id="date" name="date">
  <button type="submit" href="student.php" value="Submit">submit</button>
</form>

</body>
</html>
