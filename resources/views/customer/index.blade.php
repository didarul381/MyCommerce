@extends('website.master')

@section('title')
Customer login  page
@endsection

@section('body')
<div class="breadcrumbs">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-12">
<div class="breadcrumbs-content">
<h1 class="page-title">Login/Regiter</h1>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<ul class="breadcrumb-nav">
<li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
<li><a href="#">Shop</a></li>
<li>Complete Order</li>
</ul>
</div>
</div>
</div>
</div>


<section class="checkout-wrapper section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
        <h2> Login Form</h2>
        </div>
       <p>{{session('message')}}</p>
        <div class="card-body">
        <form action="{{route('customer.login')}}" method="POST">
            @csrf
            <div class="row mb-3">
            <label for="" class="col-md-3"> Email Address:</label>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control"/>
            </div>
            </div>
            <div class="row mb-3">
            <label for="" class="col-md-3"> Password:</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control"/>
            </div>
            </div>

            <div class="row mb-3">
            <label for="" class="col-md-3"> </label>
            <div class="col-md-9">
                <input type="submit" class="btn btn-primary" value="login"/>
            </div>
            </div>
            
        </form>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
     <h2> Register Form</h2>
        </div>
        <div class="card-body">
        <form action="" method="POST">
            <div class="row mb-3">
                <label for="" class="col-md-3"> Full Name:</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control"/>
                </div>
                </div>
            <div class="row mb-3">
            <label for="" class="col-md-3"> Email Address:</label>
            <div class="col-md-9">
                <input type="email" name="email" class="form-control"/>
            </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-3"> Mobile:</label>
                <div class="col-md-9">
                    <input type="number" name="mobile" class="form-control"/>
                </div>
                </div>
            <div class="row mb-3">
            <label for="" class="col-md-3"> Password:</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control"/>
            </div>
            </div>

            <div class="row mb-3">
            <label for="" class="col-md-3"> </label>
            <div class="col-md-9">
                <input type="submit" class="btn btn-primary" value="register"/>
            </div>
            </div>
            
        </form>
        </div>
    </div>
</div>
</div>
</div>
</section>
@endsection