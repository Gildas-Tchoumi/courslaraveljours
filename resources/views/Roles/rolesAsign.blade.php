@extends('Home.master')

@section('style')
@endsection

@section('content')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-success">
                                <h4 class="card-title" id="basic-layout-form">Asign Roles/h4>
                            </div>
                            <p class="mb-0">This is the most basic and cost estimation form is the default position.</p>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <h2>Assign roles to user : {{ $utilisateur->firstname }} </h2>
                                <form class="form" action="#" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        @foreach ($roles as $r)
                                            <div class="form-check">
                                                <input type="checkbox" id="" name="role_id[]" value="{{ $r->id }}" >
                                                <label for="companyName" class="form-check-label">{{ $r->name }}</label>
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="form-actions">
                                        <button type="button" class="btn btn-danger mr-1">
                                            <i class="icon-trash"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="icon-note"></i> Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
