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
            <h1 class="h4 text-gray-900 mb-4">Ubah Data Paket</h1>
            <hr/>
            @if($errors->any())
                <div class="alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
                </div>
            @endif 
          </div>

                @foreach($data as $datas)
                <form action="{{ route('Paket.update', $datas->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="title">title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $datas->title }}">
                    </div>
                    <div class="form-group">
                        <label for="price">price:</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $datas->price }}">
                    </div>
                    <div class="form-group">
                        <label for="price_after">price_after:</label>
                        <input type="text" class="form-control" id="price_after" name="price_after" value="{{ $datas->price_after }}">
                    </div>
                    <div class="form-group">
                        <label for="user_registered">user_registered:</label>
                        <input type="text" class="form-control" id="user_registered" name="user_registered" value="{{ $datas->user_registered }}">
                    </div>
                    <div class="form-group">
                        <label for="resource_power">resource_power</label>
                        <input type="text" class="form-control" id="resource_power" name="resource_power" value="{{ $datas->resource_power }}">
                    </div>
                    <div class="form-group">
                        <label for="disk_space">disk_space:</label>
                        <input type="text" class="form-control" id="disk_space" name="disk_space" value="{{ $datas->disk_space }}">
                    </div>
                    <div class="form-group">
                        <label for="databases">databases:</label>
                        <input type="text" class="form-control" id="databases" name="databases" value="{{ $datas->databases }}">
                    </div>
                    <div class="form-group">
                        <label for="domain">domain:</label>
                        <input type="text" class="form-control" id="domain" name="domain" value="{{ $datas->domain }}">
                    </div>
                    <div class="form-group">
                        <label for="backup">backup:</label>
                        <input type="text" class="form-control" id="backup" name="backup" value="{{ $datas->backup }}">
                    </div>
                    <div class="form-group">
                        <label for="ssl">ssl:</label>
                        <input type="text" class="form-control" id="ssl" name="ssl" value="{{ $datas->ssl }}">
                    </div>
                    
                    <button type="submit" class="btn btn-google btn-user btn-block">Submit</button>
                
                
              </form>
              @endforeach
              <hr>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endsection