<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <!-- Font and External CSS -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>

  </head>

  <body class="bg-white text-gray-900 font-inter">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
      <div class="max-w-md w-full space-y-8 bg-white p-8">
        <!-- Logo -->
        <div class="flex justify-center">
          <img
            src="image/logocv.png"
            alt="Logo-UIN"
            class="w-16 mx-auto"
          />
        </div>

        <!-- Login Headline -->
        <div class="text-center">
          <h2 class="font-sans mt-6 text-2xl font-bold text-gray-900">Masuk ke akun Anda</h2>
          <p class="mt-2 text-sm text-gray-600">
            Selamat Datang, harap masukkan identitas Anda.
          </p>
        </div>

        <!-- Form Section -->
        <form class="mt-8 space-y-6" action="{{ Route('login') }}" method="POST">
          @csrf
		  <!--Email input-->
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
			      @if ($errors->get('email') != [])
              <div class="mt-1 text-sm text-red-500">
                @foreach ($errors->get('email') as $err)
                  <p>{{ $err }}</p>
                @endforeach
              </div>
            @endif
			</div>

			<!--Password input-->
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

			  @if ($errors->get('password') != [])
              <div class="mt-1 text-sm text-red-500">
                @foreach ($errors->get('password') as $err)
                  <p>{{ $err }}</p>
                @endforeach
              </div>
            @endif
			</div>
          <!-- Email Field -->




          <!-- Password Field -->




          <!-- Remember Me & Forgot Password -->
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input
                id="remember_me"
                name="remember_me"
                type="checkbox"
                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
              />
              <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>

            @if (Route::has('password.request'))
              <div class="text-sm items-center">
                <a href="{{ Route('password.request') }}" class="font-medium text-blue-600 hover:text-blue-500">
                  Forgot your password?
                </a>
              </div>
            @endif
          </div>

          <!-- Submit Button -->
          <div>
            <button
              type="submit"
              class="group w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
            >
              Log in
            </button>
          </div>
        </form>

        <!-- Signup Link -->
        <div class="mt-6 text-center">
          <p class="text-sm text-gray-600">
            Don’t have an account?
            <a href="{{ Route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">
              Sign up
            </a>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
