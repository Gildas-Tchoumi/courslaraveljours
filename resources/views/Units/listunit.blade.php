@extends('Home.master')

@section('content')
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
                <div class="row">
                    <h1>Mes unites</h1>
                    <!--Basic Table Starts-->
              <section id="simple-table">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title-wrap bar-success">
                          <h4 class="card-title">Simple Table</h4>
                        </div>
                        <p>
                          For basic styling add the base class
                          <code>.table</code> to any <code>&lt;table&gt;</code>.
                          It may seem super redundant, but given the widespread
                          use of tables for other plugins like calendars and
                          date pickers, we've opted to isolate our custom table
                          styles.
                        </p>
                      </div>
                      <div class="card-body">
                        <div class="card-block">
                          <a class="btn btn-primary" href="{{ route('create.units') }}">Add</a>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description </th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($units as $items )
                                <tr>
                                <th scope="row">{{ $items->id }}</th>
                                <td>{{ $items->name }}</td>
                                <td>{{ $items->description }}</td>
                                <td>
                                  <a class="btn btn-primary" href="{{ route('edit.units',$items->id) }}">Edit</a>
                                  <a class="btn btn-success" href="#">Detail</a>
                                  <a class="btn btn-danger" href="{{ route('delete.units',$items->id) }}">Delete</a>
                                </td>
                              </tr>
                              @endforeach
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!--Basic Table Ends-->
                </div>
            </div>
        </div>
    </div>
@endsection
