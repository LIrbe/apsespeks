<x-base>
    <div id="auth-container">
        <div id="auth-form">
            <h2>Reģistrēt Jaunu Admin</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-elem">
                    <label for="email" class="">{{ __('Email Address:') }}</label>
                    <input id="email" type="email" class="auth-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-elem">
                    <label for="password" class="">{{ __('Password:') }}</label>
                        <input id="password" type="password" class="auth-input" name="password" required autocomplete="new-password">
                </div>
                <div class="form-elem">
                    <label for="password_confirmation" class="">{{ __('Confirm Password:') }}</label>
                        <input id="password_confirmation" type="password" class="auth-input" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="buttons">
                    <button type="submit" class="submit-button">
                        {{ __('Register') }}
                    </button>
                </div>

                @if ($errors->any())
                    <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </div>
</x-base>