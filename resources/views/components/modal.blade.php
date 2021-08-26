<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="crd px-4 py-3">
            <div class="mb-4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="mdl-title mb-3">
                Are you sure you want to delete: ?
            </div>
            <form method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="dl-btn">
                    {{ __('Delete') }}
                </button>
            </form> 
        </div>
    </div>
</div>