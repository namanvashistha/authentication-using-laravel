@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Session Active</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('name') }}
                        </div>
                    @endif
                    Hi {{ Auth::user()->name }}, <br>
                    Your Department Name is: {{ Auth::user()->department->name }}<br>
                    Your are a <b>{{ Auth::user()->type }}</b> user.
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog_n3ls py-5 medium-editor-element" id="events" style="outline: none; outline-offset: -2px; cursor: inherit;" >
    <div class="container py-xl-5 py-lg-3">
        <h3 class=" title-n3 mb-5 text-center font-weight-bold" style="outline: none; cursor: inherit;">List of Users from the department: {{ Auth::user()->department->name }}</h3>
        <div class="row mt-4 ">

            @foreach($users as $user)
            <div class="col-lg-4 col-md-6 mb-4"><div class="card"><div class="card-header m-0 "><h5 class="blog-title card-title m-0">Name: {{ $user->name }}
                        </h5>
                    </div>
                    <div class="card-body " style="outline: none; cursor: inherit;">
                        <p class=" text-left" style="outline: none; cursor: inherit;">
                            id: {{$user->id}}<br>
                            Department id: {{$user->department->id}}<br>
                            Department Name: {{$user->department->name}}<br>
                            Email: {{$user->email}}<br>
                            Token: {{$user->remember_token}}<br>
                        </p>
                    <!--    <a class="service-btn mt-xl-5 mt-4 btn" href="#" style="outline: none; cursor: inherit;">Notify them via mail<span class="fa fa-long-arrow-right ml-2" style="outline: none; cursor: inherit;"></span></a>
                    --></div>
                    <div class="card-footer blog_n3icon border-top pt-2 mt-3 d-flex justify-content-between " style="outline: none; cursor: inherit;">
                        <small class="text-bl " style="outline: none; cursor: inherit;">
                            <b>Account Created at:</b>
                        </small>
                        <span class="" style="outline: none; cursor: inherit;">
                            {{$user->created_at}}
                        </span>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

</section>


@endsection
