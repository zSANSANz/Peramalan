@extends('template')
@section('content')
 <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Paket Baru</h1>
                <hr/>
                @if($errors->any())
                    <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                    </div>
                @endif 
              </div>
                <form action="{{ route('Paket.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="price">price:</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="price_after">price_after:</label>
                        <input type="text" class="form-control" id="price_after" name="price_after">
                    </div>
                    <div class="form-group">
                        <label for="user_registered">user_registered:</label>
                        <input type="text" class="form-control" id="user_registered" name="user_registered">
                    </div>
                    <div class="form-group">
                        <label for="resource_power">resource_power</label>
                        <input type="text" class="form-control" id="resource_power" name="resource_power">
                    </div>
                    <div class="form-group">
                        <label for="disk_space">disk_space:</label>
                        <input type="text" class="form-control" id="disk_space" name="disk_space">
                    </div>
                    <div class="form-group">
                        <label for="databases">databases:</label>
                        <input type="text" class="form-control" id="databases" name="databases">
                    </div>
                    <div class="form-group">
                        <label for="domain">domain:</label>
                        <input type="text" class="form-control" id="domain" name="domain">
                    </div>
                    <div class="form-group">
                        <label for="backup">backup:</label>
                        <input type="text" class="form-control" id="backup" name="backup">
                    </div>
                    <div class="form-group">
                        <label for="ssl">ssl:</label>
                        <input type="text" class="form-control" id="ssl" name="ssl">
                    </div>
                    <button type="submit" class="btn btn-google btn-user btn-block">Submit</button>
                
                
              </form>
              <hr>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endsection