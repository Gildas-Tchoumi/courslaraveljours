@extends('Auth.Auth')

@section('style')
@endsection
@section('container') 
        <div class="content-wrapper">
            <h2 class="title m-2 text-uppercase">S'inscrire</h2>
                    <div class="card">
                        {{-- <div class="card-header">
                            <div class="card-title-wrap bar-success">
                                <h4 class="card-title" id="basic-layout-form">Cost Estimation</h4>
                            </div>
                            <p class="mb-0">This is the most basic and cost estimation form is the default position.</p>
                        </div> --}}
                        <div class="card-body">
                            <div class="px-3">
                                <form class="form" action="{{ route('store.utilisateurs') }}" method="POST">
                                    @csrf
                                    {{-- 'firstname', 'lastname', 'sexe', 'image', 'email', 'password' --}}
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="companyName">First Name</label>
                                            <input type="text" id="companyName" class="form-control" name="firstname">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="companyName">Last Name</label>
                                            <input type="text" id="companyName" class="form-control" name="lastname">
                                        </div>
                                        <div class="form-group">
                                            <label for="companyName">Sexe</label><br>
                                            <input type="radio" id="sexe" class="border-primary mx-2" name="sexe" value="Homme"> Homme
                                            <input type="radio" id="companyName" class="border-primary mx-2" name="sexe" value="Femme"> Femme
                                        </div>
                                         <div class="form-group">
                                            <label for="companyName">Image</label>
                                            <input type="text" id="companyName" class="form-control" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label for="projectinput8">Email</label>
                                             <input type="email" id="companyName" class="form-control" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="projectinput8">Password</label>
                                             <input type="password" id="companyName" class="form-control" name="password">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        {{-- <button type="button" class="btn btn-danger mr-1">
                                            <i class="icon-trash"></i> Cancel
                                        </button> --}}
                                        <button type="submit" class="btn btn-success">
                                            <i class="icon-note"></i> Save
                                        </button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer grey darken-1">
                    <p class="text-center">I have account <a href="{{ route('login') }}">Login</a></p>
                </div>
@endsection
