

@extends('layouts.pglogr')
@section('content')
<style>
/*hide row number */
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}</style>


<div class="col-md-6 col-sm-12 wow fadeInLeft" data-wow-duration="2s ease-out">
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
                <label>{{ __('Phone Number') }}</label>
                <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" maxlength="14"name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>
                @error('no_hp')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group " id="myDIV">
                <label>Role</label>
                    <select name = "id_level" class="form-control" id="id_level">
                    <option disabled selected ></option>
                    @foreach($Level_array as $level)
                    @if($level->id_level < '4'){
                <option value="{{$level->id_level}}">{{$level->nama_level}}</option>
                                  }
                    @else {"data Not FOund"}
                    @endif
                    @endforeach
                     </select>
                </div>
            
               
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

