<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-center p-8">

    <h1 class="text-4xl font-bold">Contact Me</h1>

    @if(session('success'))
        <p class="text-green-600 mt-4">{{ session('success') }}</p>
    @endif

    <form action="/contact" method="POST" class="mt-6 bg-white p-6 shadow-md w-1/3 mx-auto">
        @csrf
        <input type="text" name="name" placeholder="Your Name" class="block w-full p-2 border mt-2">
        <input type="email" name="email" placeholder="Your Email" class="block w-full p-2 border mt-2">
        <textarea name="message" placeholder="Your Message" class="block w-full p-2 border mt-2"></textarea>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4">Send</button>
    </form>

</body>
</html>
