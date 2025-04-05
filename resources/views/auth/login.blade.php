<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login-container">
        <div class="login-header">
            <p class="login-subtitle">Please enter your credentials to login</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="input-field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 error-message" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="input-field"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 error-message" />
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="form-options">
                <label for="remember_me" class="remember-me">
                    <input id="remember_me" type="checkbox" class="remember-checkbox" name="remember">
                    <span class="remember-text">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="forgot-password-link" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <button type="submit" class="login-btn">
                {{ __('Log in') }}
            </button>
        </form>

        <div class="divider">
            <span class="divider-line"></span>
            <span class="divider-text">OR</span>
            <span class="divider-line"></span>
        </div>

        <div class="social-login">
            <a href="{{ route('redirect.provider', 'google')}}" class="social-btn btn-google">
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#DB4437">
                    <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/>
                </svg>
                Login with Google
            </a>
        </div>
    </div>
</x-guest-layout>

<style>
    :root {
        --primary-color: #6B46C1;
        --primary-hover: #5F3DBF;
        --text-color: #2D3748;
        --light-text: #718096;
        --border-color: #E2E8F0;
        --error-color: #E53E3E;
        --google-red: #DB4437;
        --github-dark: #333;
    }

    body {
        background: linear-gradient(135deg, #F3F4F6,rgb(252, 252, 252));
        font-family: 'Inter', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        padding: 1rem;
        color: var(--text-color);
    }

    .login-container {
        width: 100%;
        max-width: 420px;
        padding: 2.5rem;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        text-align: center;
    }

    .login-header {
        margin-bottom: 2rem;
    }

    .login-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--text-color);
        margin-bottom: 0.5rem;
    }

    .login-subtitle {
        color: var(--light-text);
        font-size: 0.95rem;
        margin: 0;
    }

    .login-form {
        margin-top: 1.5rem;
    }

    .form-group {
        margin-bottom: 1.25rem;
        text-align: left;
    }

    .input-field {
        width: 100%;
        padding: 0.85rem 1rem;
        border-radius: 8px;
        border: 1px solid var(--border-color);
        font-size: 0.95rem;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .input-field:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(107, 70, 193, 0.2);
    }

    .error-message {
        color: var(--error-color);
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 1.25rem 0;
    }

    .remember-me {
        display: flex;
        align-items: center;
    }

    .remember-checkbox {
        width: 1rem;
        height: 1rem;
        border-radius: 4px;
        border: 1px solid var(--border-color);
        margin-right: 0.5rem;
        cursor: pointer;
    }

    .remember-checkbox:checked {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .remember-text {
        font-size: 0.9rem;
        color: var(--light-text);
    }

    .forgot-password-link {
        font-size: 0.9rem;
        color: var(--primary-color);
        text-decoration: none;
        transition: color 0.2s;
    }

    .forgot-password-link:hover {
        color: var(--primary-hover);
        text-decoration: underline;
    }

    .login-btn {
        width: 100%;
        padding: 0.85rem;
        border-radius: 8px;
        background: var(--primary-color);
        color: white;
        font-weight: 600;
        font-size: 1rem;
        border: none;
        cursor: pointer;
        transition: background 0.2s;
        margin-top: 0.5rem;
    }

    .login-btn:hover {
        background: var(--primary-hover);
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 1.75rem 0;
        color: var(--light-text);
        font-size: 0.85rem;
    }

    .divider-line {
        flex: 1;
        height: 1px;
        background: var(--border-color);
    }

    .divider-text {
        padding: 0 1rem;
    }

    .social-login {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .social-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        width: 100%;
        padding: 0.75rem;
        border-radius: 8px;
        font-size: 0.95rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-google {
        border: 1px solid var(--border-color);
        background: white;
        color: #5F6368;
    }

    .btn-google:hover {
        background: #F8F9FA;
        border-color: #DADCE0;
    }


    .social-icon {
        width: 18px;
        height: 18px;
    }

    @media (max-width: 480px) {
        .login-container {
            padding: 1.75rem;
        }
        
        .login-title {
            font-size: 1.5rem;
        }
    }
</style>