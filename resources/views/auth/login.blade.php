<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Portal - BEM FMIPA Unhas</title>
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
  <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body>
<div class="container">
	<div class="screen">
		<!-- Section Gambar Kiri -->
		<div class="screen__image">
			<img src="{{ asset('assets/img/logokmfterbaru.png') }}" alt="Logo BEM FMIPA Unhas" class="login-image">
			<div class="image-overlay">
				<h3>BEM <span>FMIPA UNHAS</span></h3>
				<p>Badan Eksekutif Mahasiswa Fakultas MIPA Unhas</p>
			</div>
		</div>
		
		<!-- Section Form Login Kanan -->
		<div class="screen__content">
			<form class="login" method="POST" action="{{ route('login') }}">
                @csrf
				<h2>PORTAL <span>LOGIN</span></h2>
				<div class="login__field">
					<i class="login__icon fas fa-envelope"></i>
					<input type="email" class="login__input @error('email') is-invalid @enderror" placeholder="Alamat Email Akun" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata Sandi">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				<button type="submit" class="button login__submit">
					<span class="button__text">Masuk Sekarang</span>
					<i class="button__icon fas fa-arrow-right"></i>
				</button>				
				<div style="text-align: center; margin-top: 18px;">
					<a href="/" style="color: #FFE500; font-size: 13px; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
						<i class="fas fa-arrow-left" style="font-size: 11px;"></i> Kembali ke Beranda
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
