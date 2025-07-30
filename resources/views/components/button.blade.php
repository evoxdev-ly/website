@props(['type' => 'button'])

<button type="{{ $type }}"
  class="inline-block bg-black text-white text-sm px-4 py-2 cursor-pointer rounded-lg uppercase font-medium hover:bg-gray-900 transition">
  {{ $slot }}
</button>
