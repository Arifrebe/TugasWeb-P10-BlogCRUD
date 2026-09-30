@extends('layouts.master')

@section('title', 'Edit Post')

@section('content')

    <div class="max-w-3xl mx-auto">

        <h1 class="text-3xl font-bold mb-6">
            Edit Post
        </h1>

        <x-card>

            <form action="{{ route('posts.update', $post) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label class="block font-medium mb-2">
                        Judul
                    </label>

                    <input type="text"
                           name="title"
                           value="{{ old('title', $post->title) }}"
                           class="w-full border rounded-lg px-4 py-2
                                  @error('title') border-red-500 @enderror">

                    @error('title')
                        <p class="text-red-600 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block font-medium mb-2">
                        Isi
                    </label>

                    <textarea name="content"
                              rows="8"
                              class="w-full border rounded-lg px-4 py-2
                                     @error('content') border-red-500 @enderror">{{ old('content', $post->content) }}</textarea>

                    @error('content')
                        <p class="text-red-600 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block font-medium mb-2">
                        Gambar
                    </label>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}"
                             class="w-40 h-28 object-cover rounded-lg mb-3">
                    @endif

                    <input type="file"
                           name="image"
                           class="w-full border rounded-lg px-4 py-2">

                    @error('image')
                        <p class="text-red-600 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex gap-3">

                    <button type="submit"
                            class="bg-blue-600 text-white px-5 py-2 rounded-lg
                                   hover:bg-blue-700">
                        Update
                    </button>

                    <a href="{{ route('posts.show', $post) }}"
                       class="bg-gray-200 px-5 py-2 rounded-lg">
                        Batal
                    </a>

                </div>

            </form>

        </x-card>

    </div>

@endsection