@props(['name'])
 <label for="{{ $name }}"  {{$attributes->merge(['class' => 'font-semibold text-gray-500'])}} >
    {{$slot}}
</label>
