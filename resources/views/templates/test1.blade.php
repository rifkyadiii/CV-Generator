<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional CV</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
html {
    -webkit-print-color-adjust: exact;
    background-color: #ffffff;
}
</style>

<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="max-w-4xl mx-auto bg-white p-8 px-8 py-8">
        <!-- Header Section -->
        <div class="flex items-center border-b pb-6">

            <div class="w-full align-center">
                <h1 class="text-3xl font-bold text-blue-500">{{$userData->Firstname}} {{$userData->Lastname}}</h1>
                <p class="text-sm text-gray-500 mt-2">
					{{$userData->Address}} <br>
                    {{$userData->WorkEmail}} - {{$userData->PhoneNumber}}
                </p>
            </div>
        </div>

        <!-- Professional Attributes -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-blue-500">Professional Attributes</h2>
            <p class="list-disc list-inside mt-4 text-gray-700">
				{{$userData->Description}}
            </p>
        </div>
		
		
        <!-- Skills -->
        <div class="mt-8">
            <h2 class="text-xl font-bold text-blue-500">Skills</h2>
			@foreach ($certificationData as $index=>$data)
            <div class="mt-4">
                <h3 class="font-bold text-gray-800">{{$data->CertificationTitle}}</h3>
                <p class="text-gray-700 mt-2 font-semibold">
                    {{$data->IssuedBy}}
                </p>
				<p class="ml-4 text-sm">
                        {{$data->SkillSets}}
                </p>
            </div>
			@endforeach
        </div>
		
        <div class="mt-8">
            <h2 class="text-xl font-bold text-blue-500">Education</h2>
			@foreach ($educationData as $data)
            <div class="mt-4">
                <h3 class="font-bold text-gray-800">{{$data->EducationInstitute}}</h3>
                <p class="italic text-sm">{{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}}</p>
                <p class="text-gray-700">{{$data->AcademicalDegree}} in {{$data->Major}}</p>
				<p class="ml-4 text-sm">GPA : {{$data->GPA}}</p>

               
            </div>
			@endforeach
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-bold text-blue-500">Experiences</h2>
			@foreach($experienceData as $data)
            <div class="mt-4">
                <h3 class="font-bold text-gray-800">{{$data->Company}}</h3>
                <p class="text-gray-700 font-semibold mt-2">{{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}}</p>   
				<p class="text-sm">{{$data->JobRole}}</p>
				<p class="ml-4 text-sm">{{$data->Description}}</p>
										           
				
            </div>

			@endforeach
        </div>
		
		<div class="mt-8">
            <h2 class="text-xl font-bold text-blue-500">Projects</h2>
			@foreach ($projectData as $data)
            <div class="mt-4">
                <h3 class="font-bold text-gray-800">{{$data->ProjectTitle}}</h3>
                <p class="text-gray-700 mt-2">
                    Tools : {{$data->ToolsForProjects}}
                </p>
			<p class="ml-4 text-sm">
				{{$data->Projectdescription}}
                            
			</p>
            </div>

			@endforeach
        </div>
		
	</div>
</body>

</html>
