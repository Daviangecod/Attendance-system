<!-- ask AI to give the code for the search button and the code that will help search trough 
 out the list of students the keyword -->
 <!-- ask ai for side navbars -->
  <!-- ask AI how to sign up as a teacher or a student , redirecting to pages for teachers 
    and students separately from thfe same form-->

<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    body {
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            position: relative; /* Required for absolute positioning */
        }
        .corner-image {
            position: absolute;
            bottom: 10px; /* Adjust as needed */
            right: 10px; /* Adjust as needed */
            width: 100px; /* Set the desired width */
            height: auto; /* Maintain aspect ratio */
        }
  </style>
</head>
<body>
<img class="corner-image" src="project1/stud.jpg" alt="Description of the image">

<!-- search bar -->
    <style>
        /* Style for the search bar */
        .search-bar {
            display: flex;
            align-items: center;
            max-width: 300px;
            margin: 0 auto;
        }
        .search-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-button {
            background-color: #2196F3;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Search bar -->
    <div class="search-bar">
        <input type="text" class="search-input" placeholder="Search...">
        <button class="search-button" onclick="performSearch()">Search</button>
    </div>

    <!-- Display search results (replace with your own logic) -->
    <div id="search-results"></div>

    <script>
        function performSearch() {
            const searchTerm = document.querySelector('.search-input').value;
            // Replace this with your actual search logic (e.g., API call, database query)
            // For demonstration purposes, we'll just display the search term.
            document.getElementById('search-results').textContent = `You searched for: ${searchTerm}`;
        }
    </script>

</body>
</html>