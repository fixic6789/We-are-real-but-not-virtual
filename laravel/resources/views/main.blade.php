<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We are real but not virtual</title>
    <link rel="icon" type="image/png" href="storage/img/logo2.png" />
</head>
<body>

    @include('layouts.header')
@push('app')
    <!-- <link rel="stylesheet" href="{{ secure_asset('resources/css/app.css') }}"> -->
@endpush
@include('layouts.blocks.welcome')
@include('layouts.blocks.forms')
@include('layouts.blocks.photo_stories')
@include('layouts.blocks.best_photostories')
@push('app')
    link
@endpush
@push('forms')
    <script href="{{ secure_asset('resources/js/forms.js') }}"></script>
@endpush
</body>
</html>
