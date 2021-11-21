<div>
    @if($menu == null)
        <button wire:click="selectMenu" class="btn btn-xs"><i class="fas fa-plus-circle" style="color: green"></i>
            <u>Add Paper</u>
        </button>
    @endif
    <div class="row">
        <div class="col-sm-12 offset-sm-0">
            @if($menu == 'add-paper')
            @livewire('author.paper-add')
            @else
                @livewire('author.paper')
            @endif
        </div>
    </div>
</div>
