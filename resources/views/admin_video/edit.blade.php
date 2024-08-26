<x-app-layout>
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">Edit Video</h1>
    <form action="{{ route('videos.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Title
            </label>
            <input type="text" name="title" id="title" value="{{ $video->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="url">
                Video URL
            </label>
            <input type="text" name="url" id="url" value="{{ $video->url }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update Video
            </button>
        </div>
    </form>
</div>
</x-app-layout>