<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>{{ config('app.name', 'Student-Card') }} - @yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Add this to your <head> section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/graindashboard.css') }}">
    <style>
        .alert {
            position: fixed;
            top: 20px;
            right: -320px; /* Start off-screen */
            z-index: 1050;
            min-width: 300px;
            background-color: #28a745;
            color: white;
            padding: 15px;
            border-radius: 5px;
            transition: right 0.5s ease-in-out; /* Slide effect */
        }

        .alert.show {
            right: 20px; /* Slide to visible position */
        }

        .alert.hide {
            right: -320px; /* Slide out to off-screen */
        }

        .alert button {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            line-height: 20px;
            cursor: pointer;
        }

        .eye-icon {
            position: absolute;
            right: 45px;
            top: 53%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 20px;
        }
    </style>
  </head>

<body>
    <main class="main">
      <div class="content">
		@yield('content')
	  </div>
    </main>

    <!-- Scripts -->
	<script src="{{ mix('graindashboard/js/graindashboard.js') }}"></script>
	<script src="{{ mix('graindashboard/js/graindashboard.vendor.js') }}"></script>

    <!-- Alert Message Logic -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const alertBox = document.querySelector('.alert');
                if (alertBox) {
                    // Wait for the DOM to fully load and then slide in
                    alertBox.style.transition = 'none'; // Disable transition temporarily for instant change
                    alertBox.style.right = '-320px'; // Reset position off-screen
                    setTimeout(() => {
                        alertBox.style.transition = 'right 0.5s ease-in-out'; // Re-enable transition
                        alertBox.style.right = '20px'; // Move the alert in view
                    }, 10);

                    // Slide out after 5 seconds
                    setTimeout(() => {
                        alertBox.style.right = '-320px'; // Slide it back off-screen
                    }, 5000); // Adjust time (in milliseconds) as needed
                }
            });
        </script>
    @endif

	@yield('scripts')
</body>
</html>
