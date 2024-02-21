@props(['disabled' => false, 'error'=>null])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-'.($error?'red':'gray').'-300 focus:border-'.($error?'red':'blue').'-500 focus:ring-'.($error?'red':'blue').'-500 rounded-md shadow-sm']) !!}>
{{ $slot }}
</textarea>
<x-input-error :messages="$error" class="mt-2" />
