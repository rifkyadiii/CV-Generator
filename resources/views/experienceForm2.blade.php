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
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Experience</h2>
    <form  method="POST" class="grid gap-4" action="{{route('ApplyUpdateExperienceForm' , ['id' => $experience->experience_id])}}">
	  @csrf
	  @method('put')
      <!-- Input Field 1 -->
      <div>
        <label for="JobRole" class="block font-medium text-gray-700">Job Role</label>
        <input type="text" id="JobRole" name="JobRole" placeholder="Enter your full name" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm mb-3"
			   value="{{old('JobRole',$experience->JobRole)}}">
      </div>

      <!-- Input Field 2 -->
      <div>
        <label for="company" class="block font-medium text-gray-700">Company</label>
        <input type="company" id="text" name="company" placeholder="Enter your Company"
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm mb-3"
			   value="{{old('company',$experience->Company)}}">
      </div>

      <!-- Input Field 4 -->
      <div>
        <label for="DateEnrolled" class="block font-medium text-gray-700">Date enrolled</label>
        <input type="date" id="DateEnrolled" name="DateEnrolled" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm mb-3"
			   value="{{old('DateEnrolled',$experience->DateEnrolled)}}">
      </div>

      <!-- Input Field 4 -->
      <div>
        <label for="DateFinished" class="block font-medium text-gray-700">Date finished</label>
        <input type="date" id="DateFinished" name="DateFinished" 
               class="form-input mt-1 w-full border-gray-300 rounded-md shadow-sm mb-3"
			   value="{{old('DateFinished',$experience->DateFinished)}}">
      </div>
	  
	  <label for="description" class="block font-medium text-gray-700">Description</label>

      <!-- Input Field 5 -->
          <textarea 
            rows="4" 
            placeholder="Briefly describe yourself or your career objectives..." 
            class="form-textarea mt-2 w-full border-gray-300 rounded-md shadow-sm resize-none"
			id="description"
			name="description">{{old('description',$experience->Description)}}</textarea>


      <!-- Submit Button -->
      <div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 ">
          Submit
        </button>
      </div>
    </form>
  </div>

</body>
</html>
