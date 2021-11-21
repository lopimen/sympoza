<!-- Modal -->
<div wire:ignore.self class="modal fade" id="editNewsModal_Admin" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('livewire.message.message')

                        <div class="form-group">
                            <label for="newsTitle">Title</label>
                            <br>
                            <textarea rows="2" wire:model = "newsTitle" class="form-control"></textarea>
                            @error('newsTitle') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="newsBody">Body</label>
                            <br>
                            <textarea rows="4" wire:model = "newsBody" class="form-control"></textarea>
                            @error('newsBody') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <button wire:click="updateNews" class="btn btn-sm btn-primary">
                            Submit
                        </button>
                </div>
                <div class="modal-footer">
                    @News Section of ISMEE
                </div>
        </div>
    </div>
</div>
