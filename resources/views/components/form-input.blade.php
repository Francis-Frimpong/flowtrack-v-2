@props(['labelClass' => null, 'inputClass' => null, 'type' => null, 'name' => null, 'placeholder' => null])
<label class="{{ $labelClass }}">{{$slot}}</label>
<input type="{{ $type }}" placeholder="{{ $placeholder }}" class="{{ $inputClass }}">