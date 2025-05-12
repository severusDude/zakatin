@php $attributes = $unescapedForwardedAttributes ?? $attributes; @endphp

@props([
'variant' => 'outline',
])

@php
$classes = Flux::classes('shrink-0')
->add(match($variant) {
'outline' => '[:where(&)]:size-6',
'solid' => '[:where(&)]:size-6',
'mini' => '[:where(&)]:size-5',
'micro' => '[:where(&)]:size-4',
});
@endphp

{{-- Your SVG code here: --}}
<svg {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
</svg>