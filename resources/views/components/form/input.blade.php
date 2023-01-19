@props(['type' => 'text', 'name', 'placeholder'])
{{-- <x-form.field> --}}
<?php $name = str_contains($name, '_') ? str_ireplace("_"," ",$name) : $name  ?>
<x-form.label name="{{ $name  }}"/>
<input
    class="form-control"
    type="{{ $type }}" placeholder="Enter {{ $placeholder }}" name="{{ $name }}"
    autocomplete="{{ $name }}"  {{ $attributes(['value' => old($name)]) }} />
{{-- <x-form.error name="{{ $name }}" /> --}}
{{-- </x-form.field> --}}
