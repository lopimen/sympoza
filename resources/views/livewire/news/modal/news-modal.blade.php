<!-- Modal -->
<div wire:ignore.self class="modal fade" id="newsModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">News View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if($newsDetail)
                        <b><h5>{{$newsDetail->title}}</h5></b>
                        <i>posted at: {{$newsDetail->updated_at}}
                        <hr>
                        {{$newsDetail->body}}
                    @endif
                </div>
                <div class="modal-footer">
                    @News Section of ISMEE
                </div>
        </div>
    </div>
</div>
