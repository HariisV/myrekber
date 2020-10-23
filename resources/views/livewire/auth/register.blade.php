@extends('livewire.fronts.layouts.app')
@section('content')
<section id="features" class="features mt-5">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="row feature-item">
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('image/register.png')}}" class="img-fluid" alt="">
        </div>
        <div class="card pt-5 ml-5 col-lg-5 mt-5 wow fadeInUp pt-5  pt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="150" style="box-shadow:0px 1px 10px 2px #d1d1d1">
          <h4 class="pt-3">Ayo Daftar!</h4>
          <form method="POST" action="{{ route('register.proses') }}">
            @csrf

            <div class="form-group">
                <div class="form-group row">
                    <div class="col">
                        <label for="nama_depan">Nama Depan</label>
                        <input id="nama_depan" type="text" class="form-control @error('nama_depan') is-invalid @enderror" name="nama_depan" value="{{ old('nama_depan') }}" required autocomplete="nama_depan" autofocus>

                        @error('nama_depan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input id="nama_belakang" type="text" class="form-control @error('nama_belakang') is-invalid @enderror" name="nama_belakang" value="{{ old('nama_belakang') }}" required autocomplete="nama_belakang" autofocus>

                        @error('nama_belakang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_telfon">{{ __('Nomor Telfon') }}</label>
                <input id="no_telfon" type="number" class="form-control @error('no_telfon') is-invalid @enderror" name="no_telfon" value="{{ old('no_telfon') }}" required autocomplete="no_telfon">

                @error('no_telfon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary btn-block mb-5">
                    {{ __('Register') }}
                </button>
            </div>
           
        </form>
        </div>
      </div>
    </div>
</section>
@endsection
