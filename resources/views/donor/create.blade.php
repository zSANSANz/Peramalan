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
                <h1 class="h4 text-gray-900 mb-4">Form Donor Baru</h1>
                <hr/>
                @if($errors->any())
                    <div class="alert-danger">
                    @foreach($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                    </div>
                @endif
              </div>
                <form action="{{ route('donor.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="id_donor">id_donor:</label>
                        <input type="text" class="form-control" id="id_donor" name="id_donor">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_donor">tanggal_donor:</label>
                        <input type="text" class="form-control" id="tanggal_donor" name="tanggal_donor">
                    </div>
                    <div class="form-group">
                        <label for="no_ktp">no_ktp:</label>
                        <input type="text" class="form-control" id="no_ktp" name="no_ktp">
                    </div>
                    <div class="form-group">
                        <label for="donor_ke">donor_ke:</label>
                        <input type="text" class="form-control" id="donor_ke" name="donor_ke">
                    </div>
                    <div class="form-group">
                        <label for="donor_terakhir">donor_terakhir</label>
                        <input type="text" class="form-control" id="donor_terakhir" name="donor_terakhir">
                    </div>
                    <div class="form-group">
                        <label for="tempat_donor">tempat_donor:</label>
                        <input type="text" class="form-control" id="tempat_donor" name="tempat_donor">
                    </div>
                    <div class="form-group">
                        <label for="penyelenggara">penyelenggara:</label>
                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                    </div>
                    <div class="form-group">
                        <label for="donor_apherensis">donor_apherensis:</label>
                        <input type="text" class="form-control" id="donor_apherensis" name="donor_apherensis">
                    </div>
                    <div class="form-group">
                        <label for="hb">hb:</label>
                        <input type="text" class="form-control" id="hb" name="hb">
                    </div>
                    <div class="form-group">
                        <label for="hcc">hcc:</label>
                        <input type="text" class="form-control" id="hcc" name="hcc">
                    </div>
                    <div class="form-group">
                        <label for="bb">bb:</label>
                        <input type="text" class="form-control" id="bb" name="bb">
                    </div>
                    <div class="form-group">
                        <label for="tensi_darah">tensi_darah:</label>
                        <input type="text" class="form-control" id="tensi_darah" name="tensi_darah">
                    </div>
                    <div class="form-group">
                        <label for="suhu_badan">suhu_badan:</label>
                        <input type="text" class="form-control" id="suhu_badan" name="suhu_badan">
                    </div>
                    <div class="form-group">
                        <label for="nadi">nadi:</label>
                        <input type="text" class="form-control" id="nadi" name="nadi">
                    </div>
                    <div class="form-group">
                        <label for="bb">nama_petugas:</label>
                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
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
