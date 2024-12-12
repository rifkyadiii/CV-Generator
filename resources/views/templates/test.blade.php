<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800 font-sans">

    <div class="max-w-4xl mx-auto bg-white">
        <!-- Left Gray Section -->
        <div class="flex">
            <!-- Left Column (Gray) -->
            <div class="w-1/3 bg-white p-6">
                <div class="text-center">
                    <h2 class="text-lg font-semibold">ADDRESS</h2>
                    <p class="text-sm mt-2">{{$userData->Address}}</p>
                </div>
				
                <!-- Contact Info -->
                <div class="mt-6 text-center">
                    <h2 class="text-lg font-semibold">TELEPHONE</h2>
                    <p class="text-sm mt-2">{{$userData->PhoneNumber}}</p>
                </div>
				@if($userData->WorkEmail != null)
                <div class="mt-6 text-center">
                    <h2 class="text-lg font-semibold">E-MAIL</h2>
                    <p class="text-sm mt-2">{{$userData->WorkEmail}}</p>
                </div>
				@endif
				
                <!-- Date of Birth -->
                <div class="mt-6 text-center">
                    <h2 class="text-lg font-semibold">DATE OF BIRTH</h2>
                    <p class="text-sm mt-2">{{$userData->Birthdate}}</p>
                </div>
            </div>

            <!-- Right Content Section -->
            <div class="w-2/3 bg-white p-6">
                <!-- Header Section -->
                <div class="border-b pb-6">
                    <h1 class="text-3xl font-bold">{{$userData->Firstname}} {{$userData->Lastname}}</h1>
                </div>
				<!--Description section-->
                <div class="mt-6">
                    <h2 class="text-xl font-bold border-b pb-2 mb-4">Description</h2>
                    <div>
                        <p class="font-semibold">
						{{$userData->Description}}
						</p>

                    </div>
             
                </div>
                <!-- Education Section -->
				
                <div class="mt-6">
                    <h2 class="text-xl font-bold border-b pb-2 mb-4">Education</h2>
					@foreach ($educationData as $data)
                    <div>
						
						<p class="font-semibold">{{$data->EducationInstitute}}</p>
                        <p class="font-semibold">{{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}}</p>
						<p class="font-semibold">{{$data->AcademicalDegree}} in {{$data->Major}}</p>
                        <p class="ml-4 text-sm">
                        GPA : {{$data->GPA}}
                        </p>
						<br>
                    </div>
					
				    @endforeach
                </div>
				

                <!-- Professional Experience -->
                <div class="mt-6">
                    <h2 class="text-xl font-bold border-b pb-2 mb-4">Experiences</h2>
					@foreach($experienceData as $data)
                    <div>
                        <p class="font-semibold">
						{{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}} | {{$data->Company}}
						</p>
                        <p class="ml-4 text-sm">
                            - {{$data->JobRole}} <br>
                            - {{$data->Description}} <br>
                            
                        </p>
						<br>
                    </div>
					@endforeach
                </div>

                <!-- Projects section -->
                <div class="mt-6">
                    <h2 class="text-xl font-bold border-b pb-2 mb-4">Projects</h2>
					@foreach ($projectData as $data)
                    <div>
					
						<p class="font-semibold">{{$data->ProjectTitle}}</p>
						<p class="font-semibold">Tools : {{$data->ToolsForProjects}}</p>
                        <p class="ml-4 text-sm">
                        {{$data->Projectdescription}}
                        </p><br>
                    </div>
				    @endforeach
                </div>

                <!--Certifications sections -->
                <!--Certifications sections -->
                <div class="mt-6">
                    <h2 class="text-xl font-bold border-b pb-2 mb-4">Certification</h2>
					@foreach ($certificationData as $data)
                    <div>
					
						<p class="font-semibold">{{$data->CertificationTitle}}</p>
						<p class="font-semibold">{{$data->IssuedBy}}</p>
                        <p class="ml-4 text-sm">
                        {{$data->SkillSets}}
                        </p><br>
                    </div>
				    @endforeach

					
                </div>
            </div>
        </div>
    </div>

</body>
</html>
