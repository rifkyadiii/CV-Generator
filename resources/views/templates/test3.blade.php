<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

		
		html {
			-webkit-print-color-adjust: exact;
			background-color: #ffffff;
		}
    </style>
</head>

<body class="bg-white p-8">
    <div class="max-w-4xl mx-auto bg-white  overflow-hidden">
        <div class="flex">
            <!-- Left Sidebar -->
            <div class="w-1/3 bg-white p-6">
                <!-- Name and Title -->
                <h1 class="text-3xl font-bold text-gray-800">{{$userData->Firstname}} {{$userData->Lastname}}</h1>

                <!-- Personal Profile -->
                <section class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Personal Profile</h3>
                    <p class="text-sm text-gray-600 mt-4 leading-relaxed">
					{{$userData->Description}}
                    </p>
                </section>

                <!-- Contact Information -->
                <section class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Contact Information</h3>
                    <ul class="text-sm text-gray-600 mt-4 space-y-2">
                        <li><strong>Cell: </strong>{{$userData->PhoneNumber}}</li>
                        <li><strong>Email: </strong>{{$userData->WorkEmail}}</li>
                        <li><strong>Address: </strong><br>{{$userData->Address}}</li>
                    </ul>
                </section>
            </div>

            <!-- Right Content -->
            <div class="w-2/3 p-6">
                <!-- Employment History -->
                <section>
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Employment History</h3>
					@foreach($experienceData as $data)
                    <div class="mt-4">
                        <h4 class="text-md font-semibold text-gray-800">{{$data->JobRole}}</h4>
                        <p class="text-sm text-gray-500">{{$data->Company}} ({{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}})</p>
                        <p class="text-sm text-gray-600 mt-2 space-y-1">
						{{$data->Description}}
                        </p>
                    </div>
					@endforeach
                </section>

                <!-- Previous Education -->
                <section class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Previous Education</h3>
					@foreach($educationData as $data)
                    <div class="mt-4">
                        <h4 class="text-md font-semibold text-gray-800">{{$data->EducationInstitute}}</h4>
                        <p class="text-sm text-gray-500">{{$data->AcademicalDegree}} in {{$data->Major}},{{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}}</p>
                        @if($data->GPA)
						<ul class="text-sm text-gray-600 mt-2 space-y-1">
                            <li>- GPA : {{$data->GPA}}</li>
                        </ul>
						@endif
						
                    </div>
					@endforeach
                </section>

                <!-- Skills and Abilities -->
                <section class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Skills and Abilities</h3>
					@foreach ($certificationData as $data)
					<div class="mt-6">
                        <h4 class="text-md font-semibold text-gray-800">{{$data->CertificationTitle}}</h4>
                        <p class="text-sm text-gray-500">{{$data->IssuedBy}}</p>
                        <p class="text-sm text-gray-600 mt-2 space-y-1">
						{{$data->SkillSets}}
                        </p>
                    </div>
					@endforeach
                </section>

                <!-- Projects -->
                <section class="mt-8">
                    <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Projects</h3>
					@foreach ($projectData as $data)
					<div class="mt-6">
                        <h4 class="text-md font-semibold text-gray-800">{{$data->ProjectTitle}}</h4>
                        <p class="text-sm text-gray-500">Tools : {{$data->ToolsForProjects}}</p>
                        <p class="text-sm text-gray-600 mt-2 space-y-1">
		                    {{$data->Projectdescription}}
                        </p>
                    </div>
					@endforeach
                </section>
            </div>
        </div>
    </div>
</body>

</html>
