<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('website/contact/style.css') }}">
 <title>SSL Travels & Tours</title>
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
