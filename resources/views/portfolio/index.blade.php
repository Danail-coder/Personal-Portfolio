<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-center p-8">

    <h1 class="text-4xl font-bold">Hello, I'm Daniel Junior Foli</h1>
    <p class="text-lg mt-4">A Web Developer passionate about building great websites.</p>

    <h2 class="text-2xl font-semibold mt-8">Projects</h2>
    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($projects as $project)
            <div class="bg-white p-4 m-2 shadow rounded">
                <h3 class="font-bold">{{ $project['title'] }}</h3>
                <p>{{ $project['description'] }}</p>
            </div>
        @endforeach
    </div>

    <a href="/contact" class="mt-6 inline-block bg-blue-500 text-white px-4 py-2 rounded">Contact Me</a>

</body>
</html>
