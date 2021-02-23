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
            <h1 class="h4 text-gray-900 mb-4">Ubah Data Pendonor</h1>
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
                <form action="{{ route('pendonor.update', $datas->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="id_pendonor">id_pendonor:</label>
                        <input type="text" class="form-control" id="id_pendonor" name="id_pendonor" value="{{ $datas->id_pendonor }}">
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">no_ktp:</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $datas->no_ktp }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $datas->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">jenis_kelamin:</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $datas->jenis_kelamin }}">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">tempat_lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $datas->tempat_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">tanggal_lahir:</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $datas->tanggal_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="status">status:</label>
                        <input type="text" class="form-control" id="status" name="status" value="{{ $datas->status }}">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">pekerjaan:</label>
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $datas->pekerjaan }}">
                    </div>
                    <div class="form-group">
                        <label for="golongan_darah">golongan_darah:</label>
                        <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="{{ $datas->golongan_darah }}">
                    </div>
                    <div class="form-group">
                        <label for="rhesus">rhesus:</label>
                        <input type="text" class="form-control" id="rhesus" name="rhesus" value="{{ $datas->rhesus }}">
                    </div>
                    <div class="form-group">
                        <label for="ibu_kandung">ibu_kandung:</label>
                        <input type="text" class="form-control" id="ibu_kandung" name="ibu_kandung" value="{{ $datas->ibu_kandung }}">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">no_telp:</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $datas->no_telp }}">
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
