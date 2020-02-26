@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Audits</div>

                    <div class="card-body">

                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>User id</td>
                                <td>Event</td>
                                <td>Auditable type</td>
                                <td>Old values</td>
                                <td>New values</td>
                                <td>Ip address</td>
                                <td>Actions</td>
                            </tr>
                            @forelse($audits as $audit)
                                <tr>
                                    <td>{{ $audit->id }}</td>
                                    <td>{{ $audit->user_id }}</td>
                                    <td>{{ $audit->event }}</td>
                                    <td>{{ $audit->auditable_type }}</td>
                                    <td>{{ mb_strimwidth(json_encode($audit->old_values, TRUE), 0, 25, "...") }}</td>
                                    <td>{{ mb_strimwidth(json_encode($audit->new_values, TRUE), 0, 25, "...") }}</td>
                                    <td>{{ $audit->ip_address }}</td>
                                    <td>
                                        <a href="{{ route('admin.audits.show', $audit->id) }}" class="btn btn-sm btn-success">Show</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">No records found.</td>
                                </tr>
                            @endforelse
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
