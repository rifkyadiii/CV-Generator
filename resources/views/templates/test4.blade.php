<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800 font-sans">
    <div class="max-w-4xl mx-auto bg-white  p-8">
        <!-- Header Section -->
        <div class="text-center border-b pb-6">
            <h1 class="text-3xl font-bold">{{$userData->Firstname}} {{$userData->Lastname}}</h1>
            <p class="text-gray-600">{{$userData->Address}}</p>
			@if($userData->PhoneNumber != null && $userData->WorkEmail != null)
            <p class="text-gray-600">{{$userData->PhoneNumber}} · {{$userData->WorkEmail}}</p>
			@endif
        </div>

        <!-- Skills Summary Section -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-black uppercase border-b pb-2">Skills Summary</h2>
            <p class="list-disc list-inside mt-4 text-gray-700">
			{{$userData->Description}}
            </p>
        </div>

        <!-- Work Experience Section -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-black uppercase border-b pb-2">Work Experience</h2>
			@foreach($experienceData as $data)
            <!-- Job 1 -->
            <div class="mt-4">
                <p class="font-semibold">{{$data->JobRole}}</p>
                <p class="text-gray-600">{{$data->Company}} · ({{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}})</p>
                <p class="list-disc list-inside mt-2 text-gray-700">
				{{$data->Description}}
                </p>
            </div>
			@endforeach

        </div>

        <!-- Education Section -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-black uppercase border-b pb-2">Education</h2>
			@foreach($educationData as $data)
            <div class="mt-4">
                <p class="font-semibold">{{$data->AcademicalDegree}}</p>
                <p class="text-gray-600">{{$data->Major}} · {{Carbon\Carbon::parse($data->DateEnrolled)->format('Y')}} - {{Carbon\Carbon::parse($data->DateFinished)->format('Y')}}</p>
                <ul class="list-disc list-inside mt-2 text-gray-700">
				@if($data->GPA != null)
                    <li>{{$data->GPA}} GPA</li>
                @endif
				</ul>
            </div>
			@endforeach
        </div>
    </div>
</body>

</html>
