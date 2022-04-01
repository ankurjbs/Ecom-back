@extends('layouts.appAdmin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 mb-2">
                <h4>Add product</h4>
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"> add product</li>
                </ol>
            </div>
        </div>
    </div>
</section>

@endsection