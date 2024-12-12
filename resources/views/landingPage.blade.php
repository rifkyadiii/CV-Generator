<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Builder</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="min-h-screen bg-white-900 text-black">
    <!-- Navigation -->
    <div class="fixed w-full top-0 z-50">
        <div class="mx-auto max-w-6xl px-8">
            <nav class="flex justify-between items-center p-6 bg-white shadow-lg rounded-lg">
                <div class="flex space-x-8">
                    <a href="#home" class="text-blue-400 font-semibold text-xl hover:text-blue-500 transition-colors">
                        Home
                    </a>
                    <a href="#about" class="text-blue-400 font-semibold text-xl hover:text-blue-500 transition-colors">
                        About
                    </a>
                    <a href="#features" class="text-blue-400 font-semibold text-xl hover:text-blue-500 transition-colors">
                        Features
                    </a>
                    {{-- <a href="#contact" class="text-blue-400 font-semibold text-xl hover:text-blue-500 transition-colors">
                        Contact
                    </a> --}}
                </div>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('login') }}" class="text-blue-400 font-semibold text-xl hover:text-blue-500 transition-colors">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-xl px-6 py-3 rounded-lg hover:bg-blue-700 text-white transition-colors">
                        Register
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <div class="h-32"></div>
    <!-- Hero Section -->
    <main id="home" class="max-w-6xl mx-auto px-4 py-16 flex flex-col md:flex-row items-center justify-between">
        <!-- Text Content -->
        <div class="text-center md:text-left md:w-1/2">
            <h1 class="text-4xl font-bold mb-4 text-blue-700">
                Build a Professional CV <span class="text-black">&</span> Portfolio
            </h1>
            <p class="text-black mb-8">
                Create a standout CV that increases your chances of success, builds personal branding, and looks great.
            </p>
            <a href="{{route('login')}}" class="inline-block bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700 font-medium text-white">Create CV</a>
        </div>
        <!-- Image -->
        <div class="mt-8 md:mt-0 md:w-1/2">
            <img src="image/heroku.jpg" alt="Professional team illustration" class="w-full h-auto">
        </div>
    </main>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white-800">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center">
            <!-- Text Content -->
            <div class="text-center md:text-left md:w-1/2">
                <h2 class="text-3xl font-bold mb-8 text-blue-700">About Us</h2>
                <p class="text-black">
                    Our CV Builder helps individuals, teams, and organizations create polished resumes quickly and effectively. Whether you're building a personal brand or applying for jobs, our platform makes it easy to stand out.
                </p>
            </div>
            <!-- Collage or Mockup -->
            <div class="mt-8 md:mt-0 md:w-1/2">
                <img src="image/about.jpg" alt="Collage of CV templates" class="w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-32 bg-white-700 text-white">
        <div class="max-w-6xl mx-auto px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-blue-700">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="group bg-slate-50 p-10 rounded-lg shadow-md text-center hover:bg-blue-400 transition-colors">
                    <h3 class="text-2xl font-semibold mb-6 text-black group-hover:text-white">Fast & Easy</h3>
                    <p class="text-xl text-blue-700 group-hover:text-white">
                        Our CV Builder is designed to be quick and intuitive, so you can create your resume in minutes.
                    </p>
                </div>
                <div class="group bg-slate-50 p-10 rounded-lg shadow-md text-center hover:bg-blue-400 transition-colors">
                    <h3 class="text-2xl font-semibold mb-6 text-black group-hover:text-white">Customizable</h3>
                    <p class="text-xl text-blue-700 group-hover:text-white">
                        Choose from a variety of templates and easily customize your CV to fit your style and needs.
                    </p>
                </div>
                <div class="group bg-slate-50 p-10 rounded-lg shadow-md text-center hover:bg-blue-400 transition-colors">
                    <h3 class="text-2xl font-semibold mb-6 text-black group-hover:text-white">Professional Look</h3>
                    <p class="text-xl text-blue-700 group-hover:text-white">
                        Impress employers and clients with a clean, professional design tailored to your career goals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="py-16 bg-white-800 text-center">
        <h2 class="text-3xl font-bold mb-8">Contact Us</h2>
        <div class="flex justify-center space-x-8 text-lg">
            <a href="#" class="hover:text-blue-300">Instagram</a>
            <a href="#" class="hover:text-blue-300">LinkedIn</a>
            <a href="#" class="hover:text-blue-300">Twitter</a>
        </div>
        <p class="text-gray-300 text-lg mt-8">© 2024 CV Builder. All rights reserved.</p>
    </footer>

    @stack('scripts')
</body>
</html>
