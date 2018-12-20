@extends('layouts.app')

@section('content')
<div class="card-deck mb-4 text-center">
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Speaking</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="/ra">RA</a>
                <a class="dropdown-item" href="/rs">RS</a>
                <a class="dropdown-item" href="/di">DI</a>
                <a class="dropdown-item" href="/rl">RL</a>
                <a class="dropdown-item" href="/asq">ASQ</a>
            </ul>
        </div>
    </div>
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Writing</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="/swt">SWT</a>
                <a class="dropdown-item" href="/we">WE</a>
            </ul>
        </div>
    </div>
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Reading</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="/ro">RO</a>
                <a class="dropdown-item" href="/fib">FIB</a>
                <a class="dropdown-item" href="/fib2">FIB2</a>
                <a class="dropdown-item" href="/mc">MC</a>
                <a class="dropdown-item" href="/mc2">MC2</a>
            </ul>
        </div>
    </div>
    <div class="card mb-3 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Listening</h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
                <a class="dropdown-item" href="/sst">SST</a>
                <a class="dropdown-item" href="/mc">MC</a>
                <a class="dropdown-item" href="/fib">FIB</a>
                <a class="dropdown-item" href="/his">HIS</a>
                <a class="dropdown-item" href="/mc2">MC2</a>
                <a class="dropdown-item" href="/smw">SMW</a>
                <a class="dropdown-item" href="/hiw">HIW</a>
                <a class="dropdown-item" href="/wfd">WFD</a>
            </ul>
        </div>
    </div>
</div>
@endsection
