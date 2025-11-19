<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
</head>
<body>
  <form id="contactForm">
    <input type="text" name="name" placeholder="Enter Your Name" required><br>
    <input type="text" name="txt_product" placeholder="Enter Product Name" required><br>
    <button type="submit">Send</button>
  </form>

  <script>
    document.getElementById("contactForm").addEventListener("submit", async function(e){
      e.preventDefault();
      let formData = new FormData(this);

      let response = await fetch("sendmessage.php", {
        method: "POST",
        body: formData
      });

      let result = await response.text();
      alert(result); // you can replace with a nicer UI
    });
  </script>
</body>
</html>
