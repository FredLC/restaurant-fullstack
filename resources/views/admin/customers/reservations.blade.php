@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Reservations</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reservations</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
       
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Reservations</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Guests Total</th>
                                        <th scope="col">Reservation Time</th>
                                        <th scope="col">Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Joe Mambre</td>
                                        <td>joe@gmail.com</td>
                                        <td>444-444-4444</td>
                                        <td>5</td>
                                        <td>6:00 PM</td>
                                        <td>2/2/2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
               
               
            </div>
@endsection