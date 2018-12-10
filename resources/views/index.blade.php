@extends('layouts.app')

@section('content')
<div class="card-deck mb-4 text-center">
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Speaking</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="#">RA</a>
                <a class="dropdown-item" href="#">RS</a>
                <a class="dropdown-item" href="#">DI</a>
                <a class="dropdown-item" href="#">RL</a>
                <a class="dropdown-item" href="#">ASQ</a>
            </ul>
        </div>
    </div>
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Writing</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="#">SWT</a>
                <a class="dropdown-item" href="#">WE</a>
            </ul>
        </div>
    </div>
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Reading</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="#">RO</a>
                <a class="dropdown-item" href="#">FIB</a>
                <a class="dropdown-item" href="#">FIB2</a>
                <a class="dropdown-item" href="#">MC</a>
                <a class="dropdown-item" href="#">MC2</a>
            </ul>
        </div>
    </div>
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Listening</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="#">SST</a>
                <a class="dropdown-item" href="#">MC</a>
                <a class="dropdown-item" href="#">FIB</a>
                <a class="dropdown-item" href="#">HIS</a>
                <a class="dropdown-item" href="#">MC2</a>
                <a class="dropdown-item" href="#">SMW</a>
                <a class="dropdown-item" href="#">HIW</a>
                <a class="dropdown-item" href="#">WFD</a>
            </ul>
        </div>
    </div>
</div>
@endsection
