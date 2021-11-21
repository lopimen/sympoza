<div>
    @include('livewire.news.admin.modal.add-news-modal')
    <script>
        window.livewire.on('addNewsModal_Admin', () => {
            $('#addNewsModal_Admin').modal('show');
        });
    </script>
</div>
