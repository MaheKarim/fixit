<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('/') }}frontend/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}frontend/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('/') }}frontend/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/') }}frontend/images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{ asset('/') }}frontend/js/html5shiv.js"></script>
    <![endif]-->
</head>
