@extends('layouts.dashboard_layout')

@section('title')
    | Panel
@endsection

@section('menu')
    <nav id="menu">
      <ul class="menu-list-bottom">
        <li><a href="mailto:">item1</a></li>
        <li><a href="">item2</a></li>
        <li><a href="">item3</a></li>
        <li><a href="">item4</a></li>
        <li><a href="">item5</a></li>
      </ul>
    </nav>
@endsection
@section('content')
<div class="container space-all" id="mid wrapper">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @include('layouts.partials.all._scripts')
@endsection
