<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Registrasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-transparent  p-6">
        <div class="text-center">
            <img src="image/logocv.png" alt="Logo-UIN" class="w-16 mx-auto">
            <h1 class="text-2xl font-bold text-gray-700 mt-4">Buat Akun Baru</h1>
        </div>
        <form method="POST" action="{{ Route('register') }}" class="mt-6 relative">
            @csrf
            <!-- Full Name -->
            <div class="mb-4">
                <label for="name" class="block mb-2 text-gray-700">Full Name*</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    required
                    class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your full name"
                />
                @if ($errors->get('name'))
                <div class="mt-1 text-sm text-red-500">
                    @foreach ($errors->get('name') as $err)
                        <span>{{ $err }}</span>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block mb-2 text-gray-700">Email Address*</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    required
                    class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your email address"
                />
                @if ($errors->get('email'))
                <div class="mt-1 text-sm text-red-500">
                    @foreach ($errors->get('email') as $err)
                        <span>{{ $err }}</span>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block mb-2 text-gray-700">Password*</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    required
                    class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your password"
                />
                @if ($errors->get('password'))
                <div class="mt-1 text-sm text-red-500">
                    @foreach ($errors->get('password') as $err)
                        <span>{{ $err }}</span>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label for="password_confirmation" class="block mb-2 text-gray-700">Confirm Password*</label>
                <input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    required
                    class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Confirm your password"
                />
                @if ($errors->get('password_confirmation'))
                <div class="mt-1 text-sm text-red-500">
                    @foreach ($errors->get('password_confirmation') as $err)
                        <span>{{ $err }}</span>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Register
            </button>
        </form>

        <div class="mt-4 text-center text-sm text-gray-500">
            Already have an account?
            <a href="{{ Route('login') }}" class="text-blue-600 hover:underline">Log in</a>
        </div>
    </div>
</body>
</html>
