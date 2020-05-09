@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-10">
              
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">New Food Item</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">All Food Items</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">New Food Item</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Create Item</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="itemName" class="col-form-label">Item Name</label>
                                        <input name="itemName" id="itemNameInput" type="text" class="form-control" placeholder="e.g. Texan Burger">
                                    </div>
                                    <div class="form-group">
                                        <label for="itemPrice" class="col-form-label">Item Price</label>
                                        <input name="itemPrice" id="itemPriceInput" type="text" class="form-control" placeholder="e.g. 9.00">
                                    </div>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="itemImageInput" name="itemImage">
                                        <label class="custom-file-label" for="itemImage">Upload Image</label>
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