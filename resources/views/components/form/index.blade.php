<form {{ $attributes }} action="{{ $route }}" method="POST">
    
    {{ $slot }}

    {{-- <button type="submit" class="btn btn-primary">
        {{ isset($object) ? __('app.update') : __('app.save') }}
    </button> --}}
</form>