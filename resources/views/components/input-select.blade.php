@props(['disabled' => false, 'options' => []])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" @if($value == 1) selected @endif>{{ $label }}</option>
    @endforeach
</select>