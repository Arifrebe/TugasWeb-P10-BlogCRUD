@extends('layouts.master')

@section('title', $post->title)

@section('content')

    <div class="max-w-4xl mx-auto">

        <x-card>

            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}"
                     alt="{{ $post->title }}"
                     class="w-full max-h-96 object-cover rounded-lg mb-6">
            @endif

            <h1 class="text-3xl font-bold mb-2">
                {{ $post->title }}
            </h1>

            <p class="text-sm text-gray-500 mb-6">
                Dibuat pada {{ $post->created_at->format('d M Y, H:i') }}
            </p>

            <div class="text-gray-700 leading-relaxed whitespace-pre-line">
                {{ $post->content }}
            </div>

            <div class="border-t mt-8 pt-5 flex gap-3">

                <a href="{{ route('posts.edit', $post) }}"
                   class="bg-yellow-500 text-white px-5 py-2 rounded-lg
                          hover:bg-yellow-600">
                    Edit
                </a>

                <form action="{{ route('posts.destroy', $post) }}"
                      method="POST"
                      onsubmit="return confirm('Yakin ingin menghapus post ini?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="bg-red-600 text-white px-5 py-2 rounded-lg
                                   hover:bg-red-700">
                        Hapus
                    </button>

                </form>

                <a href="{{ route('posts.index') }}"
                   class="bg-gray-200 px-5 py-2 rounded-lg">
                    Kembali
                </a>

            </div>

        </x-card>

    </div>

@endsection