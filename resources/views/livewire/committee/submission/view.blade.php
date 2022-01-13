<div>
    @section('content')
        <div class="row">
            <div class="col-sm-12 offset-sm-0">
                <div class="card">
                    <div class="card-header">
                        <h5><b>Submission Data</b></h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap">
                            <thead class="bg-dark">
                                <tr>
                                    <th width='5%' class="text-center">No</th>
                                    <th>Title</th>
                                    <th width='10%' class="text-center">Milestone</th>
                                    <th width='10%' class="text-center">Status</th>
                                    <th width='5%' class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($submissions) > 0)
                                    @foreach ($submissions as $submission)
                                        <tr> 
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $submission->title }}</td>
                                            <td class="text-center">
                                                <small class="badge bg-navy">
                                                    {{ DB::table('sympozia_manuscript_milestone')->where('id', $submission->milestone_id)->value('description') ?? '-' }}
                                                </small>
                                            </td>
                                            <td class="text-center">
                                                <small class="badge bg-navy">
                                                    {{ DB::table('sympozia_manuscript_status')->where('id', $submission->status_id)->value('description') ?? '-' }}
                                                </small>
                                            </td>
                                            <td width='5%'>
                                                <button class="btn btn-sm btn-danger d-block mx-auto" x-on:click="open = !open" x-data="{ open: false }" x-html="open ? '{{ DB::table('users')->where('id', DB::table('role_user')->where('role_id', 8)->value('user_id'))->value('name') }}' : 'Assign Reviewer'"></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">No submissions added yet.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-muted">
                        <i>sympozia(c)2021</i>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
