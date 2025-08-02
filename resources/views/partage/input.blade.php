@php
    $label ??= null;
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
@endphp
<div @class(["form-group", $class])>
    <label for="{{ $name }}">{{$label}}</label>
    <input class="form-control @error($name) is-invalid @enderror" type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"value="{{old($name, $value)}}">
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>