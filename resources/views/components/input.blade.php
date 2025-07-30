@props(['type' => 'text'])

<input type="text" {{ $attributes->except(['type', 'class']) }}
  {{ $attributes->merge(['class' => "w-full border border-gray-300 rounded-sm px-3 py-1 text-gray-900 focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition"])}} />
