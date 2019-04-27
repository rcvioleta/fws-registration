@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registered Employees <button id="print-report" class="btn btn-sm btn-primary float-right" onclick="window.print()">PRINT REPORT</button></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <registered-employees-component></registered-employees-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection