@props(['active' => false, 'title' => ''])

<div class="text-white max-w-xs">
  <h3 class="font-semibold mb-1">
    {{ $title }}
  </h3>
  @if ($active)
    <div class="w-16 h-0.5 bg-purple-500 mb-4"></div>
  @else
    <div class="mb-4"></div>
  @endif
  <p class="text-sm text-gray-400">
    {{ $slot }}
  </p>
</div>
