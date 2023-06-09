<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | PageUp</title>
    <link rel="shortcut icon" href="{{ URL::asset('favicon.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>
    {{ $slot }}
    @if ($errors->any())
        <x-alert isSuccess="{{ $errors->first('isSuccess') }}">{{ $errors->first('message') ?? $errors->first() }}</x-alert>
    @endif
</body>
<script>
    $('#remove-alert').click(function() {
        $(this).parent().parent().remove();
    })
</script>

</html>
