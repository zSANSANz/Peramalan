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
                <h1 class="h4 text-gray-900 mb-4">Form Permintaan Baru</h1>
                <hr/>
                @if($errors->any())
                    <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                    </div>
                @endif
              </div>
                <form action="{{ route('permintaan.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="id_permintaan">id_permintaan:</label>
                        <input type="text" class="form-control" id="id_permintaan" name="id_permintaan">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">tanggal:</label>
                        <input type="text" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="komponen">komponen:</label>
                        <input type="text" class="form-control" id="komponen" name="komponen">
                    </div>
                    <div class="form-group">
                        <label for="golongan_darah">golongan_darah:</label>
                        <input type="text" class="form-control" id="golongan_darah" name="golongan_darah">
                    </div>
                    <div class="form-group">
                        <label for="rhesus">rhesus</label>
                        <input type="text" class="form-control" id="rhesus" name="rhesus">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_permintaan">jumlah_permintaan:</label>
                        <input type="text" class="form-control" id="jumlah_permintaan" name="jumlah_permintaan">
                    </div>
                    <div class="form-group">
                        <label for="rs">rs:</label>
                        <input type="text" class="form-control" id="rs" name="rs">
                    </div>
                    <div class="form-group">
                        <label for="status">status:</label>
                        <input type="text" class="form-control" id="status" name="status">
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
