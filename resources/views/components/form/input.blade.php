<div class="form-group">
    <label for="name"> {{ __('app.'.$name) }} </label>
    <input type="{{ $type }}" 
    @isset($object)
        value="{{ $object->{ $name } }}"
    @endisset 
    class="form-control @error('{{ $name }}') mb-4 is-invalid state-invalid @enderror" id="{{$name}}" name="{{ $name}}" required>
</div>