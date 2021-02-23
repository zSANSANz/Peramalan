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
            <h1 class="h4 text-gray-900 mb-4">Ubah Data Peramalan</h1>
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
                <form action="{{ route('peramalan.update', $datas->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="tanggal_peramalan">title:</label>
                        <input type="text" class="form-control" id="tanggal_peramalan" name="tanggal_peramalan" value="{{ $datas->tanggal_peramalan }}">
                    </div>
                    <div class="form-group">
                        <label for="bulan_peramalan">bulan_peramalan:</label>
                        <input type="text" class="form-control" id="bulan_peramalan" name="bulan_peramalan" value="{{ $datas->bulan_peramalan }}">
                    </div>
                    <div class="form-group">
                        <label for="tahun_peramalan">tahun_peramalan:</label>
                        <input type="text" class="form-control" id="tahun_peramalan" name="tahun_peramalan" value="{{ $datas->tahun_peramalan }}">
                    </div>
                    <div class="form-group">
                        <label for="komponen">komponen:</label>
                        <input type="text" class="form-control" id="komponen" name="komponen" value="{{ $datas->komponen }}">
                    </div>
                    <div class="form-group">
                        <label for="golongan_darah">golongan_darah</label>
                        <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="{{ $datas->golongan_darah }}">
                    </div>
                    <div class="form-group">
                        <label for="hasil">hasil:</label>
                        <input type="text" class="form-control" id="hasil" name="hasil" value="{{ $datas->hasil }}">
                    </div>
                    <div class="form-group">
                        <label for="aktual">aktual:</label>
                        <input type="text" class="form-control" id="aktual" name="aktual" value="{{ $datas->aktual }}">
                    </div>
                    <div class="form-group">
                        <label for="mape">mape:</label>
                        <input type="text" class="form-control" id="mape" name="mape" value="{{ $datas->mape }}">
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
