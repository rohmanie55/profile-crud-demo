@props(['disabled' => false, 'left'=>null, 'error'=>null])

@if ($left)
    <div class="control icons-left">
        <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-'.($error?'red':'gray').'-300 focus:border-'.($error?'red':'blue').'-500 focus:ring-'.($error?'red':'blue').'-500 rounded-md shadow-sm pl-12']) !!}>
        <span class="icon is-small left bg-gray-50 border rounded-l border-gray-300">{!! $left !!}</span>
    </div>
    <x-input-error :messages="$error" class="mt-2" />
@else
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-'.($error?'red':'gray').'-300 focus:border-'.($error?'red':'blue').'-500 focus:ring-'.($error?'red':'blue').'-500 rounded-md shadow-sm']) !!}>
    <x-input-error :messages="$error" class="mt-2" />
@endif
