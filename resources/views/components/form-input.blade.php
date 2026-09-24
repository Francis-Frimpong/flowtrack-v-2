@props(['labelClass' => null, 'inputClass' => null, 'type' => null, 'name' => null, 'placeholder' => null, 'for' => null, 'value' => null])
<label class="{{ $labelClass }}" for="{{ $for }}">{{$slot}}</label>
<input type="{{ $type }}" placeholder="{{ $placeholder }}" class="{{ $inputClass }}" name="{{ $name }}" value="{{ $value ?? old($name) }}">
@error($name)
  <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror