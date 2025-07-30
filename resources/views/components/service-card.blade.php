@props(['title' => '', 'description' => '', 'href' => '#'])

<a href="{{ $href }}" class="flex items-center justify-between border-b py-6 group hover:bg-gray-100 transition-colors">
  <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-6">
    <h3 class="text-xl font-semibold w-40">{{ $title }}</h3>
    <p class="text-sm text-gray-600 max-w-md">
      {{ $description}}
    </p>
  </div>

  <div class="ml-auto">
    <button class="bg-white text-black group-hover:bg-black group-hover:text-white rounded-full w-8 h-8 flex items-center justify-center transition-colors">
      →
    </button>
  </div>
</a>
