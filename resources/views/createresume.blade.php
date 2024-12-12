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
        <span class="text-lg font-semibold text-blue-800">CVGEN.</span>
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
      </div>

      <!-- Form -->
	 
      <form class="grid gap-6 mt-6" action={{route('cvInsert')}} method="POST" enctype="multipart/form-data">
		@csrf
		
		
        <!-- Title Section -->
        <div>
          <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
            <i class="bi bi-pencil"></i> Title
          </h5>
          <input type="text" 
            placeholder="Enter a title for your CV (e.g., Software Engineer Resume)" 
            class="form-input mt-2 w-full border-gray-300 rounded-md shadow-sm"
            id="Title"
            name="Title">
        </div>
		
        <!-- Description -->
        <div>
          <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
            <i class="bi bi-file-text"></i> Description
          </h5>
          <textarea 
            rows="4" 
            placeholder="Briefly describe yourself or your career objectives..." 
            class="form-textarea mt-2 w-full border-gray-300 rounded-md shadow-sm resize-none"
			id="Description"
			name="Description"></textarea>
        </div>
		
      <form class="grid gap-6 mt-6">
        <!-- Personal Information -->
        <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
          <i class="bi bi-person-badge"></i> Personal Information
        </h5>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-medium text-gray-700">First Name</label>
            <input type="text" placeholder="Dev Ninja" class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" id="Firstname" name="Firstname">
          </div>
		  
		  <div>
            <label class="block font-medium text-gray-700">Last Name</label>
            <input type="text" placeholder="Dev Ninja" class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" id="Lastname" name="Lastname">
          </div>
          <div>
            <label class="block font-medium text-gray-700">Email</label>
            <input type="email" placeholder="dev@abc.com" class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" id="WorkEmail" name="WorkEmail">
          </div>
          <div>
            <label class="block font-medium text-gray-700">Mobile No</label>
            <input type="text"  placeholder="insert your active phone number" 
              class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" id="PhoneNumber" name="PhoneNumber">
          </div>
          <div>
            <label class="block font-medium text-gray-700">Date Of Birth</label>
            <input type="date" class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" id="Birthdate" name="Birthdate">
          </div>
          <div class="col-span-2">
            <label class="block font-medium text-gray-700">Address</label>
            <input type="text" placeholder="Insert your full address here !" class="form-input mt-1 w-1/2 border-gray-300 rounded-md shadow-sm " id="Address" name="Address">
          </div>
        </div>

        <!-- Submit -->
        <div class="text-right mt-6">
          <button type="submit" class="primary-bg text-white px-6 py-2 rounded-md hover-primary">
            <i class="bi bi-floppy"></i> Next
          </button>
        </div>
      </form>
    </div>
  </div>



</body>

</html>
