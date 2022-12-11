
<!DOCTYPE html>
<html lang='en' class=''>

<head>

    <meta charset='UTF-8'>
    <title>{{ $title }}</title>

    <meta name="robots" content="noindex">

    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"
    />

    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    @yield('content')
</body>
<script>
    function goTo(url) {
      console.log("Ditekan");
      location.href = url;
    }
  </script>

</html>