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
                <h1 class="h4 text-gray-900 mb-4">Form Kantong Darah Baru</h1>
                <hr/>
                @if($errors->any())
                    <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                    </div>
                @endif
              </div>
                <form action="{{ route('kantong-darah.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="id_kantong">id_kantong:</label>
                        <input type="text" class="form-control" id="id_kantong" name="id_kantong">
                    </div>
                    <div class="form-group">
                        <label for="id_donor">id_donor:</label>
                        <input type="text" class="form-control" id="id_donor" name="id_donor">
                    </div>
                    <div class="form-group">
                        <label for="komponen">komponen:</label>
                        <input type="text" class="form-control" id="komponen" name="komponen">
                    </div>
                    <div class="form-group">
                        <label for="tgl_kadaluarsa">tgl_kadaluarsa:</label>
                        <input type="text" class="form-control" id="tgl_kadaluarsa" name="tgl_kadaluarsa">
                    </div>
                    <div class="form-group">
                        <label for="jenis">jenis</label>
                        <input type="text" class="form-control" id="jenis" name="jenis">
                    </div>
                    <div class="form-group">
                        <label for="status">status:</label>
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_keluar">tanggal_keluar:</label>
                        <input type="text" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
                    </div>
                    <div class="form-group">
                        <label for="rs">rs:</label>
                        <input type="text" class="form-control" id="rs" name="rs">
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
