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
    <form method="POST" class="grid gap-4" action={{route('retrieveEducation')}}>
	 @csrf
      <!-- Input Field 1 -->
      <div>
        <label for="fullName" class="block font-medium text-gray-700">Education Institute</label>
        <input type="text" id="EducationInstitute" name="EducationInstitute" placeholder="Enter your full name" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
      </div>

      <!-- Input Field 2 -->
      <div>
        <label for="AcademicalDegree" class="block font-medium text-gray-700">Academical Degree</label>
        <input type="text" id="AcademicalDegree" name="AcademicalDegree" placeholder="Enter your email"
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
      </div>
	  
	        <!-- Input Field 3 -->
      <div>
        <label for="email" class="block font-medium text-gray-700">Major</label>
        <input type="text" id="Major" name="Major" placeholder="Enter your email"
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
      </div>

      <!-- Input Field 4 -->
      <div>
        <label for="GPA" class="block font-medium text-gray-700">GPA</label>
        <input type="number" id="GPA" name="GPA" placeholder="Enter your phone number"
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
      </div>

      <!-- Input Field 5 -->
      <div>
        <label for="DateEnrolled" class="block font-medium text-gray-700">Date Enrolled</label>
        <input type="date" id="DateEnrolled" name="DateEnrolled" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
      </div>
	  
	  <!-- Input Field 6 -->
      <div>
        <label for="DateFinished" class="block font-medium text-gray-700">Date Finished</label>
        <input type="date" id="DateFinished" name="DateFinished" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm">
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
