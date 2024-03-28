<div class="form-group">
    <label class="form-label"> {{__('app.'. $label)}} </label>
    <select name="{{ $name }}" class="@error('{{$name}}') mb-4 is-invalid state-invalid @enderror form-control " data-bs-placeholder="Select Country">
        @foreach ($collection as $item)
        <option @isset($object)
            @if ($object->{ $name } == $item->id)
                selected
            @else
                111
            @endif
        @endisset value="{{ $item->id }}">{{ $item->name }}</option>                                    
        @endforeach
    </select>
</div>