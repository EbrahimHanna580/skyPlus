@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> --}}

        <div class="col-md-6">
            
        </div>

        <div class="col-md-6 posts-container" style="height: 35rem; overflow-y: scroll">
            
        </div>

    </div>
</div>
@endsection
