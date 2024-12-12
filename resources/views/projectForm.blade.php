<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #f5f7fa; /* Light gray background */
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">

  <!-- Form Container -->
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Simple Form</h2>
    <form method="POST" class="grid gap-4" action={{route('retrieveProject')}}>
	  @csrf
        
        
      <!-- Input Field 1 -->
      <div>
        <label for="ProjectTitle" class="block font-medium text-gray-700">Project Title</label>
        <input type="text" id="ProjectTitle" name="ProjectTitle" placeholder="Enter your full name" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
      </div>

      <div>
        <label for="ToolsForProjects" class="block font-medium text-gray-700">Tools For Projects</label>
        <input type="text" id="ToolsForProjects" name="ToolsForProjects" placeholder="Enter your full name" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
      </div>

        <div>
          <h5 class="text-lg font-medium text-gray-600 flex items-center gap-2">
            <i class="bi bi-file-text"></i> Project Description
          </h5>
          <textarea 
            rows="4" 
            placeholder="Briefly describe yourself or your career objectives..." 
            class="form-textarea mt-2 w-full border-gray-300 rounded-md shadow-sm resize-none"
			id="Projectdescription"
			name="Projectdescription"></textarea>
        </div>
		
      <!-- Submit Button -->
      <div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
          Submit
        </button>
      </div>
    </form>
  </div>

</body>
</html>
