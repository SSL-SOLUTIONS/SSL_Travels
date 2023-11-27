<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('website/contact/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

 <title>SSL Travels & Tours</title>
 <style>
        body{
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    @include('allfiles.nav')

    <div class="container">
        <h2> <b>Contact Us</b></h2>
        <form>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="tel" name="phone" placeholder="Your Phone Number" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
    <br>
    @include('allfiles.footer')
</body>
</html>    
