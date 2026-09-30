<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Blog CRUD')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white border-b">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('posts.index') }}"
               class="text-xl font-bold text-gray-800">
                MyBlog
            </a>

            <a href="{{ route('posts.create') }}"
               class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                + Tambah Post
            </a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-8">

        <x-alert />

        @yield('content')

    </main>

</body>
</html>