@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('user/update/') }}">
                @include('auth.forms.regorupd_form')
            </form>
        </div>
    </div>
</div>
@endsection
