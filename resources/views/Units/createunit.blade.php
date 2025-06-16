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
                                <h4 class="card-title" id="basic-layout-form">Cost Estimation</h4>
                            </div>
                            <p class="mb-0">This is the most basic and cost estimation form is the default position.</p>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form" action="{{ route('store.units') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="companyName">Name</label>
                                            <input type="text" id="companyName" class="form-control" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="projectinput8">Description</label>
                                            <textarea id="projectinput8" rows="5" class="form-control" name="description"></textarea>
                                        </div>
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
