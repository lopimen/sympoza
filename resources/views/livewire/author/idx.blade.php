<div>
    @section('content')
        <div class="row">
            <div class="col-sm-12 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <b>Author</b> | Landing Page
                    </div>
                    <div class="card-body">
                        <h3>
                        </h3>
                        Welcome to Internation Symposium on Material and Electrical Engineering
                        (ISMEE) 2021
                        <hr>
                        <h5>
                        <b>.: News</b>
                        </h5>
                        <div class="row">
                            <div class="col-sm-12 offset-sm-0">
                                @livewire('news.home')
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
