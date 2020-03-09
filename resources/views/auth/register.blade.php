

@extends('layouts.pglogr')
@section('content')
<div class="col-md-6 col-sm-12">
    <div class="register-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label>{{ __('Name') }}</label>
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Address') }}</label>
                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
<<<<<<< HEAD
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group ">
                <label>Level</label>
                <select name = "id_level" class="form-control" id="level" onchange = "ShowHideDiv()">
                    <option disabled selected ></option>
                    @foreach ($Level_array as $data)
                    <option value="{{ $data->id_level }}" name="id_level"  >{{$data->nama_level}}</option>
                    @endforeach
                </select>
            </div>
=======
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group ">
                <label>Gender</label>
                    <select name = "gender" class="form-control" id="gender">
                    <option disabled selected ></option>
                    <option value="L">Male</option>
                    <option value="P">Female</option>
                     </select>
                </div>
            
>>>>>>> 15e5820aefe0e42137d3b4a2a0b6afd84bda656e
            <div class="form-group">
                <label>{{ __('Phone Number') }}</label>
                <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>
<<<<<<< HEAD
                @error('no_hp')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group" id="jumlah_perkerja">
                <label>{{ __('Total Contractor') }}</label>
                <input id="jumlah_perkerja" type="text" class="form-control @error('jumlah_perkerja') is-invalid @enderror" name="jumlah_perkerja" >
                @error('jumlah_perkerja')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
=======
                    @error('no_hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
            <!-- <div class="form-group" id="jumlah_perkerja">
                <label>{{ __('Total Contractor') }}</label>
                    <input id="jumlah_perkerja" type="text" class="form-control @error('jumlah_perkerja') is-invalid @enderror" name="jumlah_perkerja" >
                    @error('jumlah_perkerja')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> -->
            
>>>>>>> 15e5820aefe0e42137d3b4a2a0b6afd84bda656e
            <div class="form-group">
                <label>{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror        
            </div>
            <div class="form-group">
                <label>{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-warning">{{ __('Register') }}</button>
        </form>
    </div>
</div>
@endsection

