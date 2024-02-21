@props(['color'=>'blue'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => "button $color"]) }}>
    {{ $slot }}
</button>