@extends('layouts.app')

@section('title', 'Ticket')

@section('content')
    <div id="app"> <!-- ID: 'app' -->
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Ticket</h2>
                    </div>
                    <div class="card-body">
                        <ticket></ticket>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection