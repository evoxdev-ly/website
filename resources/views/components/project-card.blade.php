@props(['image' => '', 'title' => '', 'description' => '', 'href' => '#'])

<a href="{{ $href }}" class="w-80 flex-shrink-0 rounded-lg shadow-lg overflow-hidden">
  <img src="{{ $image }}" alt="Projeto" class="w-full h-48 object-cover">
  <div class="bg-white p-4">
    <p class="text-purple-600 font-bold text-sm">{{ $title }}</p>
    <p class="text-sm text-gray-600">{{ $description }}</p>
  </div>
</a>
