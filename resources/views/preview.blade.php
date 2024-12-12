<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #f5f7fa; /* Light gray background like Google Docs */
        }

        .button-card {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .button-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center font-sans text-gray-800">
    <div class="max-w-5xl w-full p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-8 text-center">Choose Your Template</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Button 1 -->
            <a href="{{ route('type1' , ['id' => $id]) }}" class="button-card bg-white rounded-lg shadow-lg p-6 text-center hover:bg-gray-100">
                <img src="{{asset('image/type1.png')}}" alt="Button 1 Image" class="mx-auto mb-4">
                <h2 class="text-lg font-bold">Type 1</h2>
            </a>

            <!-- Button 2 -->
            <a href="{{ route('type2' , ['id' => $id]) }}" class="button-card bg-white rounded-lg shadow-lg p-6 text-center hover:bg-gray-100">
                <img src="{{asset('image/type2.png')}}" alt="Button 2 Image" class="mx-auto mb-4">
                <h2 class="text-lg font-bold">Type 2</h2>
            </a>

            <!-- Button 3 -->
            <a href="{{ route('type3' , ['id' => $id]) }}" class="button-card bg-white rounded-lg shadow-lg p-6 text-center hover:bg-gray-100">
                <img src="{{asset('image/type3.png')}}" alt="Button 3 Image" class="mx-auto mb-4">
                <h2 class="text-lg font-bold">Type 3</h2>
            </a>

            <!-- Button 4 -->
            <a href="{{ route('type4' , ['id' => $id]) }}" class="button-card bg-white rounded-lg shadow-lg p-6 text-center hover:bg-gray-100">
                <img src="{{asset('image/type4.png')}}" alt="Button 4 Image" class="mx-auto mb-4">
                <h2 class="text-lg font-bold">Type 4</h2>
            </a>

            <!-- Button 5 -->
            <a href="{{ route('type5' , ['id' => $id]) }}" class="button-card bg-white rounded-lg shadow-lg p-6 text-center hover:bg-gray-100">
                <img src="{{asset('image/type5.png')}}" alt="Button 5 Image" class="mx-auto mb-4">
                <h2 class="text-lg font-bold">Type 5</h2>
            </a>
        </div>
    </div>
</body>

</html>
