<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Kantin</title>
    
</head>
@section('styles')
    <link rel="stylesheet" href="{{ asset('resources/css/customer-login.css') }}" rel="stylesheet">
@endsection
<body>
    <!-- Include your navigation bar or header if needed -->
    <div class="container">
    <!-- Content section -->
    @yield('content')
    </div>
    <!-- Include your footer if needed -->

    <!-- Include any JavaScript files if needed -->
</body>

</html>
