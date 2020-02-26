@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Show audit</div>

                    <div class="card-body">

                        <ul>
                            <li># : {{ $audit->id }}</li>
                            <li>User id : {{ $audit->user_id }}</li>
                            <li>Event : {{ $audit->event }}</li>
                            <li>Auditable type : {{ $audit->auditable_type }}</li>
                            <li>Auditable id : {{ $audit->auditable_id }}</li>
                            <li>Old values : {{ json_encode($audit->old_values, TRUE) }}</li>
                            <li>New values : {{ json_encode($audit->new_values, TRUE) }}</li>
                            <li>Url : {{ $audit->url }}</li>
                            <li>Ip address : {{ $audit->ip_address }}</li>
                            <li>User agent : {{ $audit->user_agent }}</li>
                            <li>Created at : {{ date_format($audit->created_at, 'd/m/Y H:i:s') }}</li>
                            <li>Updated at : {{ date_format($audit->updated_at, 'd/m/Y H:i:s') }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
