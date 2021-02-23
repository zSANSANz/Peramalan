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
                <h1 class="h4 text-gray-900 mb-4">Form Peramalan Baru</h1>
                <hr/>
                @if($errors->any())
                    <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                    </div>
                @endif
              </div>
                <form action="{{ route('peramalan.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="tanggal_peramalan">tanggal_peramalan:</label>
                        <input type="text" class="form-control" id="tanggal_peramalan" name="tanggal_peramalan">
                    </div>
                    <div class="form-group">
                        <label for="bulan_peramalan">bulan_peramalan:</label>
                        <input type="text" class="form-control" id="bulan_peramalan" name="bulan_peramalan">
                    </div>
                    <div class="form-group">
                        <label for="tahun_peramalan">tahun_peramalan:</label>
                        <input type="text" class="form-control" id="tahun_peramalan" name="tahun_peramalan">
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
                        <label for="hasil">hasil</label>
                        <input type="text" class="form-control" id="hasil" name="hasil">
                    </div>
                    <div class="form-group">
                        <label for="aktual">aktual:</label>
                        <input type="text" class="form-control" id="aktual" name="aktual">
                    </div>
                    <div class="form-group">
                        <label for="mape">mape:</label>
                        <input type="text" class="form-control" id="mape" name="mape">
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
