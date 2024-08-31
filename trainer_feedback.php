<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainer Feedback</title>
</head>
<body>
    <form id="infoForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Feedback</label>
        <input type="text" id="email" name="email" required><br><br>

        <button type="button" onclick="saveData()">Submit</button>
      </form>
      <script>
        function saveData() {
            // Get values from the form
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;

            // Get existing responses from localStorage
            var responses = JSON.parse(localStorage.getItem('responses')) || [];

            // Add the new response
            responses.push({ name: name, email: email });

            // Save updated responses back to localStorage
            localStorage.setItem('responses', JSON.stringify(responses));
        }
      </script>
</body>
</html>