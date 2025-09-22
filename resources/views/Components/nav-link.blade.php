@props(['active' => false, 'type' => 'a'])

<a {{ $attributes->merge([
    'class' => 'rounded-md px-3 py-2 font-medium hover:bg-purple-700 ' . ($active ? 'bg-green-700' : 'bg-black-700'),
    'aria-current' => $active ? 'page' : false
]) }}>
    {{ $slot }}
</a>
