<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>about</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{('website/about/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
  <div class="container-fluid bg-light"  style="margin-top: 10pc;">
    <div class="row" style="margin-top: 40pc;">
      <div class="col-lg-6 col-md-6 text-center">
        <h1 class="heading">What we do</h1><br>
        <p class="paragraph">One 58 Travel & Tours is a venture that strives to give its customer the most
          efficient, affordable and infallible Service. However, what sets us apart from the rest is our
          guarantee of the most competitive rates and air-fares available.
        </p>
        <ul id="aicons">
          <p class="fa fa-check" style="font-size:20px;color:blue"><span style="color:rgb(82, 76, 76);"
              class="span">Ticketing service & visa cons</span></p>
          <p class="fa fa-check" style="font-size:20px;color:blue"><span style="color:rgb(82, 76, 76);"
              class="span">World wide tours and packages</span></p>
          <p class="fa fa-check" style="font-size:20px;color:blue"><span style="color:rgb(82, 76, 76);"
              class="span">Hotel bookings, and traveling</span></p>
        </ul>
      </div>
      <!-- Form Column -->
      <div class="col-lg-6 col-md-6 ">
        <div class="box" onclick="toggleBox(this)">
          1. Our Mission <span class="plus">+</span>
          <div class="dropdown-content" id="dropdown">
            <p style="color: black;">We aim to give our clients a hassle-free booking and purchasing period
              with a consistently efficient customer care all the way. We want to ensure an unforgettable
              travel experience.</p>
          </div>
        </div>
        <div class="box" onclick="toggleBox(this)">
          1. Our Objectives <span class="plus">+</span>
          <div class="dropdown-content" id="dropdown">
            <p style="color: black;">Our main priority is our client. We strive to deliver the facilities,
              services and hospitality to ensure complete comfort for our customers.</p>
          </div>
        </div>
        <div class="box" onclick="toggleBox(this)">
          1. Our Services <span class="plus">+</span>
          <div class="dropdown-content" id="dropdown">
            <p style="color: black;">We also assist with visa facilities, hotel bookings, car rentals,
              travel money, tours information and provide 24/7 travel inquiry service.</p>
          </div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-3">
        <h1 id="counter">0</h1>
        <p>WORLD WIDE DESTINATIONS</p>
      </div>
      <div class="col-3">
        <h1 class="counter" id="holidayCounter">0</h1>
        <p>HOLIDAY PACKAGES</p>
      </div>

      <div class="col-3">
        <h1 class="counter" id="experienceCounter">0</h1>
        <p>YEARS EXPERIENCE</p>
      </div>




      <div class="col-3">
        <h1 class="counter" id="clientsCounter">0</h1>
        <p>SATISFIED CLIENTS</p>
      </div>

    </div>


    <br><br><br><br><br>
    <div class="row">
      <!-- Text Column -->
      <div class="col-12 col-md-6 text-center text-md-left">
        <h1 class="heading">Our goal is to provide a superior <br> customer experience</h1><br>
        <p class="paragraph">We fly our customers to 970 destinations and offer holiday packages to over 180 
          destinations worldwide. Whether it is a business visit, Standard or university group tour, honeymoon 
          tour, a conference, or any adventurous endeavor our agents are trained in finding travel and tour 
          packages that are tailored to your specifications and budget needs. We also assist with visa 
          facilities, hotel bookings, car rentals, travel money, tour information and provide 24/7 travel 
          enquiry service.
        </p>
        <a href="" class="btn btn-primary" style="margin-left: 0;">CONTACT US</a>
    </div>
    

      <!-- Image Column -->
      <div class="col-lg-6 col-md-6">
        <div class="image-container">
            <img src="images.jfif" alt="">
        </div>
    </div>

    </div>
      
    <div class="row">
      <!-- Text Column -->
      <div class="col-12 col-md-6 text-center text-md-left">
        <h1 class="heading">Our Priorities</h1><br>
        <p class="paragraph">Our main priority is our client. We strive to deliver the facilities, services and hospitality to ensure complete comfort for our customers. Our skilled workforce is extremely proficient in serving the customers with best of their abilities. We ensure absolute customer satisfaction based on our operating infrastructure, systems and vendor relations to deliver our promise to the highest degree.

          We aim to give our clients a hassle-free booking and purchasing period with a consistently efficient customer care all the way. We want to ensure an unforgettable travel experience.
          
        </p>
        <a href="" class="btn btn-primary" style="margin-left: 0;">GET STARTED</a>
    </div>
    

      <!-- Image Column -->
      <div class="col-lg-6 col-md-6">
        <h1 style="font-size: medium;">AFFORDABILITY</h1>
        <div class="w3-light-grey">
          <div id="myBar" class="w3-green" style="height:10px;width:0; border-radius: 4px;"></div>
        </div>
        <h2 style="font-size: medium;">WORLD WIDE DESTINATIONS</h2>
        <div class="w3-light-green">
          <div id="myBar2" class="w3-green" style="height:10px;width:0;  border-radius: 4px;"></div>
        </div>
    
        <h3 style="font-size: medium;">PLANNING & MANAGEMENT</h3>
        <div class="w3-light-orange">
          <div id="myBar3" class="w3-orange" style="height:10px;width:0;  border-radius: 4px;"></div>
        </div>
        <h4 style="font-size: medium;">GUIDANCE</h4>
        <div class="w3-light-purple">
          <div id="myBar4" class="w3-purple" style="height:10px;width:0;  border-radius: 4px;"></div>
        </div>
    </div>


    </div>
  </div>

  

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>

    function toggleBox(element) {
      element.classList.toggle("clicked");
    }
  </script>
  <script>
    function startCounting() {
      let count = 0;
      const counterElement = document.getElementById('counter');
      let interval = 20; // Faster interval

      function updateCount() {
        counterElement.textContent = count;
        count += 5; // Increase the count by 5 for faster counting

        if (count <= 970) {
          setTimeout(updateCount, interval);
        } else {
          setTimeout(() => {
            counterElement.textContent = 970;
          }, 1000);
        }
      }

      updateCount();
    }

    window.onload = startCounting;

  </script>
  <script>
    function startCounting() {
      // Counter for WORLD WIDE DESTINATIONS
      let count = 0;
      const counterElement = document.getElementById('counter');
      let interval = 20; // Faster interval

      function updateCount() {
        counterElement.textContent = count;
        count += 10; // Increase the count by 5 for faster counting

        if (count <= 970) {
          setTimeout(updateCount, interval);
        } else {
          setTimeout(() => {
            counterElement.textContent = 970;
          }, 1000);
        }
      }

      // Counter for HOLIDAY PACKAGES
      let holidayCount = 0;
      const holidayCounterElement = document.getElementById('holidayCounter');
      let holidayInterval = 20; // Faster interval for holiday counter

      function updateHolidayCount() {
        holidayCounterElement.textContent = holidayCount;
        holidayCount += 5; // Increase the count by 5 for faster counting

        if (holidayCount <= 180) {
          setTimeout(updateHolidayCount, holidayInterval);
        } else {
          setTimeout(() => {
            holidayCounterElement.textContent = 180;
          }, 3000);
        }
      }

      // Start both counters
      updateCount();
      updateHolidayCount();
    }

    window.onload = startCounting;

  </script>
  <script>
    function startExperienceCounting() {
      let experienceCount = 0;
      const experienceCounterElement = document.getElementById('experienceCounter');
      let experienceInterval = 50; // Adjust the interval as needed

      function updateExperienceCount() {
        experienceCounterElement.textContent = experienceCount;
        experienceCount += 1; // Increase the count by 1

        if (experienceCount <= 15) { // Change the limit as needed
          setTimeout(updateExperienceCount, experienceInterval);
        } else {
          setTimeout(() => {
            experienceCounterElement.textContent = 15; // Change the final count as needed
          }, 1000); // Adjust the delay as needed
        }
      }

      // Start the experience counter
      updateExperienceCount();
    }

    window.onload = () => {
      startCounting(); // Call the existing counters
      startExperienceCounting(); // Call the new counter
    };
  </script>

  <script>
    function startClientsCounting() {
      let clientsCount = 0;
      const clientsCounterElement = document.getElementById('clientsCounter');
      let clientsInterval = 30; // Adjust the interval as needed

      function updateClientsCount() {
        clientsCounterElement.textContent = clientsCount;
        clientsCount += 15; // Increase the count by 2, adjust as needed

        if (clientsCount <= 1122) { // Change the limit as needed
          setTimeout(updateClientsCount, clientsInterval);
        } else {
          setTimeout(() => {
            clientsCounterElement.textContent = 1122; // Change the final count as needed
          }, 1000); // Adjust the delay as needed
        }
      }

      // Start the clients counter
      updateClientsCount();
    }

    window.onload = () => {
      startCounting(); // Call the existing counters
      startExperienceCounting();
      startClientsCounting(); // Call the new counter
    };
  </script>
<script>
  function move() {
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);

    // Check if it's the first load or a refresh
    var isFirstLoad = sessionStorage.getItem("isFirstLoad");
    if (!isFirstLoad) {
      sessionStorage.setItem("isFirstLoad", true);
    } else {
      // Page refresh, set progress to 90%
      width = 90;
      elem.style.width = width + '%';
      clearInterval(id);
    }

    function frame() {
      if (width >= 100) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + '%';
      }
    }
  }

  // Call move() when the page is loaded
  document.addEventListener("DOMContentLoaded", move);
</script>
<script>
  function moveProgressBar(elemId, initialProgress) {
    var elem = document.getElementById(elemId);
    var progressKey = elemId + "_progress";
    var isFirstLoad = sessionStorage.getItem(elemId + "_isFirstLoad");

    if (!isFirstLoad) {
      sessionStorage.setItem(elemId + "_isFirstLoad", true);
      sessionStorage.setItem(progressKey, initialProgress);
    } else {
      // Page refresh, set progress to 85%
      sessionStorage.setItem(progressKey, 85);
      elem.style.width = 85 + '%';
    }

    var width = sessionStorage.getItem(progressKey);
    var id = setInterval(frame, 10);

    function frame() {
      if (width >= 85) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + '%';
      }
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    moveProgressBar("myBar2", 0); // Call for the second div with a different initial progress
  });

  // Clear sessionStorage on page unload (refresh)
  window.addEventListener("beforeunload", function() {
    sessionStorage.clear();
  });
</script>
<script>
  function moveProgressBarHeading3() {
    var elem = document.getElementById("myBar3");
    var progressKey = "myBar3_progress";
    var isFirstLoad = sessionStorage.getItem("myBar3_isFirstLoad");

    if (!isFirstLoad) {
      sessionStorage.setItem("myBar3_isFirstLoad", true);
      sessionStorage.setItem(progressKey, 0);
    } else {
      // Page refresh, set progress to 80%
      sessionStorage.setItem(progressKey, 80);
      elem.style.width = 80 + '%';
    }

    var width = sessionStorage.getItem(progressKey);
    var id = setInterval(frame, 10);

    function frame() {
      if (width >= 80) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + '%';
      }
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    moveProgressBar("myBar2", 0, 85); // Call for Heading 2
    moveProgressBarHeading3(); // Call for Heading 3
  });

  // Clear sessionStorage on page unload (refresh)
  window.addEventListener("beforeunload", function() {
    sessionStorage.clear();
  });
</script>

<script>
  function moveProgressBarHeading4() {
    var elem = document.getElementById("myBar4");
    var progressKey = "myBar4_progress";
    var isFirstLoad = sessionStorage.getItem("myBar4_isFirstLoad");

    if (!isFirstLoad) {
      sessionStorage.setItem("myBar4_isFirstLoad", true);
      sessionStorage.setItem(progressKey, 0);
    } else {
      // Page refresh, set progress to 82%
      sessionStorage.setItem(progressKey, 82);
      elem.style.width = 82 + '%';
    }

    var width = sessionStorage.getItem(progressKey);
    var id = setInterval(frame, 10);

    function frame() {
      if (width >= 82) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + '%';
      }
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    moveProgressBar("myBar2", 0, 85); // Call for Heading 2
    moveProgressBarHeading3(); // Call for Heading 3
    moveProgressBarHeading4(); // Call for Heading 4
  });

  // Clear sessionStorage on page unload (refresh)
  window.addEventListener("beforeunload", function() {
    sessionStorage.clear();
  });
</script>




</body>

</html>