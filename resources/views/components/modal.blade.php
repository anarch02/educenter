<div class="modal fade" id="{{ $id ?? 'fullscreenmodal' }}" tabindex="-1" role="dialog">
    <div class="modal-dialog {{ $type ?? ' ' }}" role="document">
        <div class="modal-content">
            <div class="alert alert-danger" id="errors">
                
            </div>
            {{ $slot }}
        </div>
    </div>
</div>