@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                                                            
                    {{ __('You are logged in!') }} - {{ Auth::user()->name }}
                    
                    <div class="bd-example">                    
                    @if(Auth::user()->role == 1)
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        @elseif(Auth::user()->role == 2)
                        <button type="button" class="btn btn-primary">Primary</button>                    
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
