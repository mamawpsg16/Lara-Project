@props(['name'])
<label {{ $attributes(['class' => 'mb-2']) }}
    for="{{ $name }}">{{   ucfirst($name).':' }}</label>
