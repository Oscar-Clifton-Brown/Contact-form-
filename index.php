<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Send an E-mail</h1>
    <form class = 'contact-form' action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="mail" placeholder="Your E-mail Address">
        <input type="text" name="phone" placeholder="Phone Number">
        <textarea name="message" placeholder="Type your message here"></textarea>
        <button type="submit" name = 'submit'>send E-mail</button>
    </form>
    <div style="width:100px;height:100px;background-color:purple"></div>
</body>
</html>