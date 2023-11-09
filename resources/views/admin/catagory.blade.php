<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Welcome Back !</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="admin/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="stylesheet" href="admin/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('layouts.navbar')

            @include('layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Add New Catagory</h1>
                    </div>

                    @if (session()->has('message'))
                        <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="section-body">
                        <div class="card-body">
                            <form action="{{ url('/add_catagory') }}" method="POST">
                                @csrf

                                <input type="text" name="catagory" placeholder="Catagory Name">
                                <input type="submit" name="submit" class="btn btn-primary" value="Add Catagory">

                            </form>
                        </div>
                    </div>
                </section>
            </div>
            @include('layouts.footer')

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="admin/assets/modules/jquery.min.js"></script>
    <script src="admin/assets/modules/popper.js"></script>
    <script src="admin/assets/modules/tooltip.js"></script>
    <script src="admin/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="admin/assets/modules/moment.min.js"></script>
    <script src="admin/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
