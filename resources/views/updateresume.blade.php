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
      <!-- Updated Logo -->
      <a href="#" class="flex items-center">
        <span class="text-lg font-bold primary">CVGEN.</span>
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container mx-auto py-6">
    <!-- Card -->
    <div class="bg-white rounded-lg shadow p-6">
      <!-- Header -->
      <div class="flex justify-between border-b pb-4">
        <h5 class="text-xl font-semibold text-gray-800">Edit CV</h5>
        <a href="#" class="text-primary hover:underline text-sm flex items-center gap-2">
          <i class="bi bi-arrow-left-circle"></i> Back
        </a>
      </div>

      <!-- Form -->
      <form class="grid gap-6 mt-6" method="POST" action="{{ route('cvApplyUpdate', ['id' => $cv->cv_id]) }}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <!-- Title Section -->
        <div>
          <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
            <i class="bi bi-pencil"></i> Title
          </h5>
          <input type="text" 
            placeholder="Enter a title for your CV (e.g., Software Engineer Resume)" 
            class="form-input mt-2 w-full border-gray-300 rounded-md shadow-sm"
            id="Title"
            name="Title"
            value="{{ old('Title', $cv->Title) }}">
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
            name="Description">{{ old('Description', $cv->Description) }}</textarea>
        </div>

        <!-- Personal Information -->
        <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
          <i class="bi bi-person-badge"></i> Personal Information
        </h5>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-medium text-gray-700">First Name</label>
            <input type="text" 
              placeholder="Enter Your First Name" 
              class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" 
              id="Firstname" 
              name="Firstname" 
              value="{{ old('Firstname', $cv->Firstname) }}">
          </div>
          <div>
            <label class="block font-medium text-gray-700">Last Name</label>
            <input type="text" 
              placeholder="Enter Your Last Name" 
              class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" 
              id="Lastname" 
              name="Lastname" 
              value="{{ old('Lastname', $cv->Lastname) }}">
          </div>
          <div>
            <label class="block font-medium text-gray-700">Email</label>
            <input type="email" 
              placeholder="Enter Your Email" 
              class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" 
              id="WorkEmail" 
              name="WorkEmail" 
              value="{{ old('WorkEmail', $cv->WorkEmail) }}">
          </div>
          <div>
            <label class="block font-medium text-gray-700">Mobile No</label>
            <input type="text" 
              placeholder="Enter Your Mobile Number" 
              class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" 
              id="PhoneNumber" 
              name="PhoneNumber" 
              value="{{ old('PhoneNumber', $cv->PhoneNumber) }}">
          </div>
          <div class = "row-span-2">
            <label class="block font-medium text-gray-700">Address</label>
            <input type="text" 
              placeholder="Enter Your Address" 
              class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" 
              id="Address" 
              name="Address" 
              value="{{ old('Address', $cv->Address) }}">
          </div>
          <div>
            <label class="block font-medium text-gray-700">Date of Birth</label>
            <input type="date" 
              class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm" 
              id="Birthdate" 
              name="Birthdate" 
              value="{{ old('Birthdate', $cv->Birthdate) }}">
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
