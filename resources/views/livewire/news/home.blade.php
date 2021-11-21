<div>
    @include('livewire.news.modal.news-modal')
    @livewire('news.admin.add')
    @livewire('news.admin.edit')
    @if(Auth::user()->hasRole('committee'))
        <button  class="btn btn-sm" wire:click="$emit('addNews_Admin')">
            <i class="fas fa-plus-circle fa-xs" style="color: green"></i>
            <u>Add News</u>
        </button>
    @endif
    <hr>
    @foreach($news as $number => $newssection)
        <button class='btn' wire:click='newsBody({{$newssection->id}})'>
            {{++$number}}. <i>{{$newssection->updated_at}}</i>
            <u>{{$newssection->title}}</u>
            @if(Auth::user()->hasRole('committee'))
                <button wire:click="$emit('deleteNews_admin', {{$newssection->id}})" class="btn btn-xs"><i class="fa fa-minus-circle" style="color:red"></i> delete</button>
                <button wire:click="$emit('editNews_admin', {{$newssection->id}})" class="btn btn-xs"><i class="fa fa-edit" style="color:green"></i> edit</button>
            @endif
        </button>
        <br>
    @endforeach


    <script>
        window.livewire.on('newsModal', () => {
            $('#newsModal').modal('show');
        });
    </script>
</div>
