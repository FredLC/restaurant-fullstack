@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-10">
              
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">New User</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">All Users</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">New User</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Add User</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="firstName" class="col-form-label">First Name</label>
                                        <input name="firstName" id="firstNameInput" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName" class="col-form-label">Last Name</label>
                                        <input name="lastName" id="lastNameInput" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input name="email" id="emailInput" type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Password</label>
                                        <input name="password" id="passwordInput" type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Select Role</label>
                                        <select class="form-control" id="roleInput">
                                            <option value="admin">Admin</option>
                                            <option value="employee">Employee</option>
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
 
            </div>

        </div>
    </div>
@endsection