<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSL Travels & Tours</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website/contacts/style.css')}}">

</head>
<body>
    <div class="container contain mb-3">
        <div class="row">
            <!-- Heading Column -->
            <div class="col-12 col-md-6 text-center">
                <h1 class="heading">Have any questions? Let's get in touch!</h1>
                <p class="paragraph" >Whether you want inspiration and guidance in planning your next adventure or need help with an existing booking, feel free to get in touch.</p>
            </div>
            
            <!-- Form Column -->
            <div class="col-12 col-md-6 order-md-2">
                <!-- Contact Form -->
                <form >
                    <div class="form-group">
                        <label for="name"></label>
                        <input  type="text" class="form-control p-3" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control p-3" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message"></label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="boty mt-4" >
                    <button type="submit" class="btn btn-primary">Send Message</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
    

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
