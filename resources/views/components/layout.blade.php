<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center h-screen bg-white">
    <div class="bg-gray-300 p-8 rounded-lg shadow-lg w-96">
        {{ $slot }}
    </div>
</body>

</html>
