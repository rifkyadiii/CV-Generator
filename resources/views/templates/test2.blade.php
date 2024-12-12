<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
html {
    -webkit-print-color-adjust: exact;
    background-color: #ffffff;
}
</style>

<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="max-w-3xl mx-auto bg-white p-8">
        <!-- Header Section -->
        <div class="flex justify-between items-center border-b pb-6">
            <div>
                <h1 class="text-3xl font-bold">{{$userData->Firstname}} {{$userData->Lastname}}</h1>
                <p class="text-gray-600 mt-2">
                   {{$userData->Description}}
                </p>
            </div>
            <div class="text-right">
                <p class="text-sm">{{$userData->Address}}</p>
                <p class="text-sm">{{$userData->PhoneNumber}}</p>
                <p class="text-sm">{{$userData->WorkEmail}}</p>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-black border-b pb-2">Skills</h2>
            <div class="grid grid-cols-2 mt-4 gap-4 text-gray-700">
			@foreach ($certificationData as $data)
            <div class="mt-4">
                <p class="font-bold text-gray-800">{{$data->CertificationTitle}}</p>
                <p class="text-gray-600 mt-1">{{$data->IssuedBy}}</p>
                <p class="text-gray-700 mt-2">
				{{$data->SkillSets}}
                </p>
            </div>
			@endforeach
            </div>
			
        </div>

        <!-- Experience Section -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-black border-b pb-2">Experience</h2>
			@foreach($experienceData as $data)
            <div class="mt-4">
                <p class="font-semibold text-gray-800">{{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}}</p>
                <p class="font-bold">{{$data->JobRole}}</p>
				<p class="font-semibold">{{$data->Company}}</p>
                <p class="text-gray-700 mt-2">
				{{$data->Description}}
                </p>
            </div>
			@endforeach
        </div>

        <!-- Education Section -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-black border-b pb-2">Education</h2>
			@foreach ($educationData as $data)
            <div class="mt-4">
                <p class="font-semibold text-gray-800">{{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}}</p>
                <p class="font-bold">{{$data->EducationInstitute}}</p>
				<p class="font-semibold">{{$data->AcademicalDegree}} in {{$data->Major}}</p>
                <p class="text-gray-700 mt-2">
				GPA : {{$data->GPA}}
                </p>
            </div>
			@endforeach
        </div>


        <!-- Projects Section -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-black border-b pb-2">Projects</h2>
			@foreach ($projectData as $data)
            <div class="mt-4">
                <p class="font-bold text-gray-800">{{$data->ProjectTitle}}</p>
                <p class="text-gray-600 mt-1">Tools : {{$data->ToolsForProjects}}</p>
                <p class="text-gray-700 mt-2">
                    {{$data->Projectdescription}}
                </p>
            </div>
           @endforeach
        </div>
    </div>
</body>

</html>
