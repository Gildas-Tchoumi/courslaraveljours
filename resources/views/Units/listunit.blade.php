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
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
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
