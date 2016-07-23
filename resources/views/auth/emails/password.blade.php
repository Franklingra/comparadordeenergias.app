Has click aquí para restablecer tu contraseña: <a href="{{ $link = route('password.reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
