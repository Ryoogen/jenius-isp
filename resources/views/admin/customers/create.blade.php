@extends('admin.template.dashboard')
@section('container')

<div class="row mt-5">
  <div class="col-12 col-sm-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Project Details</h4>
      </div>
      <div class="card-body">
        <form action="/admin/customers" method="post" enctype="multipart/form-data">
          @csrf
          @method('post')
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="onu">Onu:</label>
                <input type="text" class="form-control @error('onu') is-invalid @enderror" name="onu" id="onu" value="{{ old('onu') ?? $availablePort }}">
                @error('onu')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="type">Serial Number:</label>
                <input type="text" class=" form-control @error('sn') is-invalid @enderror" name="sn" id="sn" value="{{ $sn }}">
                @error('sn')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="type">Type:</label>
                <select name="type" id="type" class="form-control">
                  <option value="ZTEG-F609">ZTEG-F609</option>
                </select>
                <!-- <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{ old('type') }}"> -->
                @error('type')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="odp_id">Odp:</label>
                <select name="odp_id" id="odp_id" class="form-control @error('odp_id') is-invalid @enderror">
                  @foreach($odp as $rowodp)
                  <option value="{{ $rowodp->id }}">{{ $rowodp->name }} [{{ $rowodp->odc->name }}]</option>
                  @endforeach
                </select>
                @error('odp_id')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="name">Username:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}">
                @error('password')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
                <div class="form-group mt-2">
                  <input type="checkbox" id="showPass">
                  <label for="showPass"> Tampilkan password</label>
                </div>
              </div>
              <div class="form-group">
                <label for="vlan">Vlan:</label>
                <input type="number" class="form-control @error('vlan') is-invalid @enderror" name="vlan" id="vlan" value="{{ old('vlan') }}">
                @error('vlan')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="vlanprofile">Vlan Profile:</label>
                <input type="text" class="form-control @error('vlanprofile') is-invalid @enderror" name="vlanprofile" id="vlanprofile" value="{{ old('vlanprofile') }}">
                @error('vlanprofile')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="paket_id">Paket:</label>
                <select name="paket_id" id="paket_id" class="form-control">
                  @foreach($paket as $pkt)
                  <option value="{{ $pkt->id }}">{{ $pkt->speed }}Mbps</option>
                  @endforeach
                </select>
                @error('paket_id')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="hp">Hp:</label>
                <input type="number" class="form-control @error('hp') is-invalid @enderror" name="hp" id="hp" value="{{ old('hp') }}">
                @error('hp')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="nik">Nik:</label>
                <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" value="{{ old('nik') }}">
                @error('nik')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="foto_ktp">Foto Ktp:</label>
                <input type="file" class="form-control @error('foto_ktp') is-invalid @enderror" name="foto_ktp" id="foto_ktp">
                @error('foto_ktp')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="foto_rumah">Foto Rumah:</label>
                <input type="file" class="form-control @error('foto_rumah') is-invalid @enderror" name="foto_rumah" id="foto_rumah">
                @error('foto_rumah')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="status_rumah">Status Rumah:</label>
                <select name="status_rumah" id="status_rumah" class="form-control">
                  <option value="Pribadi">Pribadi</option>
                  <option value="Kontrak">Kontrak</option>
                  <option value="Kantor">Kantor</option>
                  <option value="Toko">Toko</option>
                  <option value="Cafe">Cafe</option>
                  <option value="Warung Makan">Warung Makan</option>
                </select>
                @error('status_rumah')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address">{{ @old('address') }}</textarea>
                @error('alamat')
                <div id="validationServer04Feedback" class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="latitude">Lokasi (map):</label>
                <div class="row">
                  <div class="col-6">
                    <input type="text" placeholder="Latitude" class="form-control @error('latitude') is-invalid @enderror" name="latitude" id="latitude" value="{{ old('latitude') }}">
                    @error('latitude')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="col-6">
                    <input type="text" placeholder="Longitude" class="form-control @error('longitude') is-invalid @enderror" name="longitude" id="longitude" value="{{ old('longitude') }}">
                    @error('longitude')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end">

            <button type="submit" class="me-2 btn btn-primary">Simpan</button>
            <a href="/admin/customers" class="btn btn-secondary">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $('#name').on('keyup', function(e) {
    let cleanedString = $(this).val().replace(/[^a-zA-Z0-9]/g, '');
    $('#password').val(cleanedString.toLowerCase() + $('#sn').val());
  })

  $('#name').on('ready', function(e) {
    let cleanedString = $(this).val().replace(/[^a-zA-Z0-9]/g, '');
    $('#password').val(cleanedString.toLowerCase() + $('#sn').val());
  })

  $('#showPass').on('click', function() {
    $('#password').attr('type', $('#password').attr("type") == 'password' ? 'text' : 'password')
  })
</script>
@if (@session('error'))
<script>
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: `{{ @session('error') }}`,
  })
</script>
@endif
@endsection