@extends('layouts.master')

@section('title', 'Daftar Post')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold">Daftar Post</h1>
            <p class="text-gray-500 mt-1">
                Kelola artikel blog kamu.
            </p>
        </div>
    </div>

    <form action="{{ route('posts.index') }}" method="GET" class="mb-6 flex gap-2">

        <input type="text" name="search" value="{{ $search }}" placeholder="Cari judul atau isi post..."
            class="flex-1 border rounded-lg px-4 py-2">

        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg
                   hover:bg-blue-700">
            Cari
        </button>

        @if ($search)
            <a href="{{ route('posts.index') }}" class="bg-gray-200 px-5 py-2 rounded-lg">
                Reset
            </a>
        @endif

    </form>

    @if ($posts->count())

        <div class="space-y-5">

            @foreach ($posts as $post)
                <x-card>

                    <div class="flex justify-between gap-6">

                        <div class="flex-1">

                            <h2 class="text-xl font-bold mb-2">
                                {{ $post->title }}
                            </h2>

                            <p class="text-gray-500 mb-4">
                                {{ Str::limit($post->content, 150) }}
                            </p>

                            <div class="flex gap-2">

                                <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:underline">
                                    Lihat
                                </a>

                                <a href="{{ route('posts.edit', $post) }}" class="text-yellow-600 hover:underline">
                                    Edit
                                </a>

                                <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus post ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="text-red-600 hover:underline">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </div>

                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="w-40 h-28 object-cover rounded-lg">
                        @endif

                    </div>

                </x-card>
            @endforeach

        </div>

        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    @else
        <x-card>
            <div class="text-center py-10">
                <h2 class="text-xl font-semibold">
                    Belum ada post
                </h2>

                <p class="text-gray-500 mt-2">
                    Silakan tambahkan post pertama kamu.
                </p>
            </div>
        </x-card>

    @endif

@endsection
