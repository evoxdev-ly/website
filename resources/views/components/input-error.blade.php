@props(['name' => ''])
<div>
  @error($name)
    <span {{ $attributes->merge(['class' => "text-xs text-red-400 font-light"]) }}>{{ $message }}</span>
  @enderror
</div>
