<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Resumes</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="logo.png">
  <style>
    body {
      background-color: #f5f7fa; /* Light gray background similar to Google Docs */
    }

    nav {
      background-color: #ffffff; /* White navbar */
    }

    .primary {
      color: #1a73e8; /* Google Docs primary blue color */
    }

    .primary-bg {
      background-color: #1a73e8; /* Google Docs primary blue color */
    }

    .secondary-bg {
      background-color: #f5f7fa; /* Subtle background for sections */
    }

    .hover-primary:hover {
      background-color: #165bb7; /* Darker shade for hover states */
    }
  </style>
</head>

<body class="min-h-screen">
  <!-- Navbar -->
  <nav class="shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <a href="#" class="flex items-center gap-2">
        <img src="logo.png" alt="Logo" class="h-6">
        <span class="text-lg font-semibold text-gray-800">CV Generator</span>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto py-6">
    <!-- Card -->
    <div class="bg-white rounded-lg shadow p-6">
      <!-- Header -->
      <div class="flex justify-between border-b pb-4">
        <h5 class="text-xl font-semibold text-gray-800">Create Resume</h5>
        <a href="#" class="text-primary hover:underline text-sm flex items-center gap-2">
          <i class="bi bi-arrow-left-circle"></i> Back
        </a>
      </div>

      <!-- Form -->
	 
      <form class="grid gap-6 mt-6" action={{route('dashboard')}} method="POST">
		
       @csrf

        <form class="grid gap-6 mt-6" action={{route('dashboard')}} method="POST">
		
       @csrf

        <!-- Experience -->
        <div class="border-t pt-6">
          <div class="flex justify-between items-center">
            <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
              <i class="bi bi-briefcase"></i> Experience
            </h5>
            <a href={{route('experienceForm')}} class="primary-bg text-white px-6 py-2 rounded-md hover-primary gap-2">
              <i class="bi bi-file-earmark-plus"></i> Add New
            </a>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
			  @foreach($experienceData as $data)
				<div class="border p-4 rounded-md">
				  <div class="flex justify-between items-center">
					<h6 class="font-medium text-gray-800">{{$data->JobRole}}</h6>
					<a href="#" class="text-gray-400 hover:text-red-500"><i class="bi bi-x-lg"></i></a>
				  </div>
				  <p class="text-sm text-gray-600 mt-1"><i class="bi bi-buildings"></i> {{$data->Company}}</p>
				  <p class="text-sm text-gray-600 mt-1">{{$data->Description}}</p>
				  <a href={{route('experienceForm')}} class="primary-bg text-white px-6 py-2 rounded-md hover-primary gap-2">
					<i class="bi bi-file-earmark-plus"></i> Add New
				  </a>
				</div>
			  @endforeach
          </div>
        </div>


        <!-- Education -->
        <div class="border-t pt-6">
          <div class="flex justify-between items-center">
            <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
              <i class="bi bi-journal-bookmark"></i> Education
            </h5>
            <a href={{route('educationForm')}} class="primary-bg text-white px-6 py-2 rounded-md hover-primary gap-2">
              <i class="bi bi-file-earmark-plus"></i> Add New
            </a>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
		  @foreach($educationData as $data)
            <div class="border p-4 rounded-md">
			
              <div class="flex justify-between items-center">
                <h6 class="font-medium text-gray-800">{{$data->EducationInstitute}} | {{$data->AcademicalDegree}} in {{$data->Major}}</h6>
                <a href="#" class="text-gray-400 hover:text-red-500"><i class="bi bi-x-lg"></i></a>
              </div>
              <p class="text-sm text-gray-600 mt-1"><i class="bi bi-book"></i>{{Carbon\Carbon::parse($data->DateEnrolled)->toFormattedDateString()}} - {{Carbon\Carbon::parse($data->DateFinished)->toFormattedDateString()}}</p>
              <p class="text-sm text-gray-600 mt-1">GPA : {{$data->GPA}}</p>
            </div>
			@endforeach
          </div>
        </div>

        <!-- Projects -->
        <div class="border-t pt-6">
          <div class="flex justify-between items-center">
            <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
              <i class="bi bi-boxes"></i> Projects
            </h5>
            <a href={{route('projectForm')}} class="primary-bg text-white px-6 py-2 rounded-md hover-primary gap-2">
              <i class="bi bi-file-earmark-plus"></i> Add New
            </a>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
		  @foreach($projectData as $data)
            <div class="border p-4 rounded-md">
			
              <div class="flex justify-between items-center">
                <h6 class="font-medium text-gray-800">{{$data->ProjectTitle}}</h6>
                <a href="#" class="text-gray-400 hover:text-red-500"><i class="bi bi-x-lg"></i></a>
              </div>
              <p class="text-sm text-gray-600 mt-1"><i class="bi bi-book"></i>{{$data->ToolsForProjects}}</p>
              <p class="text-sm text-gray-600 mt-1">{{$data->Projectdescription}}</p>
            </div>
			@endforeach
          </div>
        </div>
		
        <!-- Certifications -->
        <div class="border-t pt-6">
          <div class="flex justify-between items-center">
            <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
              <i class="bi bi-boxes"></i> Certifications
            </h5>
            <a href={{route('certificationForm')}} class="primary-bg text-white px-6 py-2 rounded-md hover-primary gap-2">
              <i class="bi bi-file-earmark-plus"></i> Add New
            </a>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
			@foreach($certificationData as $data)
			<div class="border p-4 rounded-md">
              <div class="flex justify-between items-center">

                <h6 class="font-medium text-gray-800">{{$data->CertificationTitle}}</h6>
                <a href="#" class="text-gray-400 hover:text-red-500"><i class="bi bi-x-lg"></i></a>
              </div>
              <p class="text-sm text-gray-600 mt-1"><i class="bi bi-book"></i>{{$data->IssuedBy}}</p>
              <p class="text-sm text-gray-600 mt-1">{{$data->SkillSets}}</p>
            </div>
			@endforeach
          </div>
        </div>


        <!-- Submit -->
        <div class="text-right mt-6">
          <button type="submit" class="primary-bg text-white px-6 py-2 rounded-md hover-primary">
            <i class="bi bi-floppy"></i> Save CV
          </button>
        </div>
      </form>
    </div>
  </div>



</body>

</html>
