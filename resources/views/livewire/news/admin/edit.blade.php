<div>
    @include('livewire.news.admin.modal.edit-news-modal')
    <script>
        window.livewire.on('editNewsModal_Admin', () => {
            $('#editNewsModal_Admin').modal('show');
        });
    </script>
</div>
