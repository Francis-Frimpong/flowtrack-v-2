@props(['labelClass' => null, 'inputClass' => null, 'type' => null, 'name' => null, 'placeholder' => null, 'for' => null])
<label class="{{ $labelClass }}" for="{{ $for }}">{{$slot}}</label>
<input type="{{ $type }}" placeholder="{{ $placeholder }}" class="{{ $inputClass }}" name="{{ $name }}">