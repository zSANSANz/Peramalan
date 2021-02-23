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
            <h1 class="h4 text-gray-900 mb-4">Ubah Data Kantong Darah</h1>
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
                <form action="{{ route('kantong-darah.update', $datas->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="id_kantong">id_kantong:</label>
                        <input type="text" class="form-control" id="id_kantong" name="id_kantong" value="{{ $datas->id_kantong }}">
                    </div>
                    <div class="form-group">
                        <label for="id_donor">id_donor:</label>
                        <input type="text" class="form-control" id="id_donor" name="id_donor" value="{{ $datas->id_donor }}">
                    </div>
                    <div class="form-group">
                        <label for="komponen">komponen:</label>
                        <input type="text" class="form-control" id="komponen" name="komponen" value="{{ $datas->komponen }}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_kadaluarsa">tgl_kadaluarsa:</label>
                        <input type="text" class="form-control" id="tgl_kadaluarsa" name="tgl_kadaluarsa" value="{{ $datas->tgl_kadaluarsa }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis">jenis</label>
                        <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $datas->jenis }}">
                    </div>
                    <div class="form-group">
                        <label for="status">status:</label>
                        <input type="text" class="form-control" id="status" name="status" value="{{ $datas->status }}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_keluar">tanggal_keluar:</label>
                        <input type="text" class="form-control" id="tanggal_keluar" name="tanggal_keluar" value="{{ $datas->tanggal_keluar }}">
                    </div>
                    <div class="form-group">
                        <label for="rs">rs:</label>
                        <input type="text" class="form-control" id="rs" name="rs" value="{{ $datas->rs }}">
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
