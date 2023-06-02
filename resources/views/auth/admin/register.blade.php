<form method="POST" action="{{ route('admin.register') }}">
    @csrf

    <div>
        <label for="name">{{ __('Name') }}</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <label for="role">{{ __('Role') }}</label>
        <input id="role" type="role" name="role" required>
    </div>

    <div>
        <button type="submit">
            {{ __('Register') }}
        </button>

        <a href="/admin/login">login</a>
    </div>
</form>
