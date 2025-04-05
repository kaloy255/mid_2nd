<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    <style>
        :root {
            --color-primary: #FF2D20;
            --color-dark: #1a1a1a;
            --color-light: #f8fafc;
            --color-gray: #64748b;
            --color-light-gray: #e2e8f0;
            --radius-lg: 0.5rem;
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
            --transition: all 0.2s ease;
        }
        
        html, body {
            overflow: hidden; /* Prevent scrolling */
            height: 100vh; /* Ensure it takes full viewport height */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        
        body {
            font-family: 'Figtree', sans-serif;
            background-color: var(--color-light);
            color: var(--color-dark);
            line-height: 1.5;
        }
        
        .dark body {
            background-color: var(--color-dark);
            color: var(--color-light);
        }
        
        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        header {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 1rem 2rem;
        }
        
        .nav-links {
            display: flex;
            gap: 1rem;
            padding-right: 5%;
        }
        
        .btn {
            display: inline-block;
            padding: 0.5rem 1.5rem;
            border-radius: var(--radius-lg);
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .btn-outline {
            border: 1px solid var(--color-light-gray);
            color: var(--color-dark);
        }
        
        .btn-outline:hover {
            border-color: var(--color-gray);
        }
        
        .dark .btn-outline {
            border-color: #333;
            color: var(--color-light);
        }
        
        .dark .btn-outline:hover {
            border-color: var(--color-light);
        }
        
        .btn-primary {
            background-color: var(--color-primary);
            color: white;
        }
        
        .btn-primary:hover {
            opacity: 0.9;
        }
        
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1; /* Ensures the section expands without needing scrolling */
            text-align: center;
            padding: 2rem;
            overflow: hidden; /* Prevent inner scrolling */
        }
        
        .logo {
            width: 200px;
            height: auto;
            margin-bottom: 2rem;
        }
        
        .title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .subtitle {
            font-size: 1.25rem;
            color: var(--color-gray);
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .cta-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        
        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .feature {
            flex: 1;
            min-width: 250px;
            background: white;
            padding: 1.5rem;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            text-align: left;
        }
        
        .dark .feature {
            background: #222;
        }
        
        .feature-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .feature-text {
            color: var(--color-gray);
        }
        
        .link {
            color: var(--color-primary);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .link:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                width: 100%;
            }
            
            .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        @if (Route::has('login'))
            <nav class="nav-links">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main class="hero">
        <svg class="logo" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
            <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
            <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
            <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
            <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
            <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
            <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 355.214 105.364 374.672 105.364C389.21 105.364 401.795 100.288 409.282 91.0667L397.175 79.1579C391.71 85.0037 383.813 88.5083 374.672 88.5083C365.57 88.5083 358.92 85.0794 358.92 80.0172C358.92 75.3549 361.907 73.2495 367.79 73.2495H387.45V67.3427H367.79C362.532 67.3427 359.112 65.2536 359.112 62.1339C359.112 59.0139 365.116 57.4283 371.755 56.1468C377.585 54.9341 383.687 53.0638 389.144 51.1449L400.043 39.7425C392.978 36.0996 385.219 33.7742 376.571 30.3656Z" fill="currentColor" />
        </svg>
        
        <h1 class="title">Welcome to Laravel</h1>
        <p class="subtitle">The easiest way to build modern web applications.</p>

        <div class="cta-buttons">
            <a href="#" class="btn btn-outline">Learn More</a>
            <a href="#" class="btn btn-primary">Get Started</a>
        </div>

        <section class="features">
            <div class="feature">
                <h3 class="feature-title">Feature One</h3>
                <p class="feature-text">Description of feature one goes here.</p>
            </div>
            <div class="feature">
                <h3 class="feature-title">Feature Two</h3>
                <p class="feature-text">Description of feature two goes here.</p>
            </div>
            <div class="feature">
                <h3 class="feature-title">Feature Three</h3>
                <p class="feature-text">Description of feature three goes here.</p>
            </div>
        </section>
    </main>
</body>
</html>
