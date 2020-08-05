@extends('template')

@section('content')

<div class="container mt-8 pb-5">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-md-7">
			<div class="card bg-secondary border-0 mb-0">
				<div class="card-header bg-transparent pb-5">
					<div class="text-muted text-center mt-2 mb-3">
						<small>Register in with</small>
					</div>
					<div class="btn-wrapper text-center">
						<a href="#" class="btn btn-neutral btn-icon">
							<span class="btn-inner--icon"><img src="{{ asset('img/icons/common/github.svg') }}"></span>
							<span class="btn-inner--text">Github</span>
						</a>
						<a href="#" class="btn btn-neutral btn-icon">
							<span class="btn-inner--icon"><img src="{{ asset('img/icons/common/google.svg') }}"></span>
							<span class="btn-inner--text">Google</span>
						</a>
					</div>
				</div>
				<div class="card-body px-lg-5 py-lg-5">
					<div class="text-center text-muted mb-4">
						<small>Or register in with credentials</small>
					</div>
					<form method="POST" action="{{ route('register') }}">
                        @csrf
						<div class="form-group mb-3">
							<div class="input-group input-group-merge input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-caps-small"></i></span>
								</div>
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
						<div class="form-group mb-3">
							<div class="input-group input-group-merge input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-email-83"></i></span>
								</div>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror

							</div>
						</div>
						<div class="form-group mb-3">
							<div class="input-group input-group-merge input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
								</div>
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-merge input-group-alternative">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
								</div>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">
							</div>
						</div>
						<div class="custom-control custom-control-alternative custom-checkbox">
							<input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="custom-control-label" for="remember">
								<span class="text-muted">{{ __('Remember Me') }}</span>
							</label>
						</div>
						<div class="text-center">
							<input class="btn btn-primary my-4" type="submit" value="Register">
						</div>
					</form>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-6">
					@if (Route::has('password.request'))
						<a class="text-light" href="{{ route('password.request') }}">
							<small>{{ __('Forgot Your Password?') }}</small>
						</a>
					@endif
				</div>
				<div class="col-6 text-right">
					<a href="{{ route('login') }}" class="text-light"><small>Login</small></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
