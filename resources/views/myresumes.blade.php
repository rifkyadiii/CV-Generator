<x-app-layout>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Docs Clone</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Toggle dropdown visibility
    function toggleDropdown(id) {
      const dropdown = document.getElementById(id);
      dropdown.classList.toggle('hidden');
    }
  </script>
</head>
<body class="bg-gray-100">


  <!-- Content -->
  <div class="container mx-auto p-6">
    <!-- Section Title -->
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold text-gray-800">Recent Documents</h2>
      <a href={{route('cvCreate')}} class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" >
        <span>+ New</span>
      </a>
    </div>

    <!-- Documents Grid -->
	
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
	
	@if($cvDatas != [])
		
		@foreach($cvDatas as $data)
		  <!-- Single Document Card -->
		  <div class="relative bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow" >
			<h3 class="text-lg font-medium text-gray-800 truncate">{{$data->Title}}</h3>
			<p class="text-sm text-gray-500">{{Carbon\Carbon::parse($data->updated_at)->toDayDateTimeString();}}</p>

	

			<!-- Dropdown Menu -->
           <div class=" sm:flex sm:items-center sm:ms-0">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger" >
                        <button class="inline-flex items-center px-0 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>Options</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
					
                        <x-dropdown-link :href="route('pdfPreview' , ['id' => $data->cv_id])">
                            {{ __('Preview CV') }}
                        </x-dropdown-link>
						<x-dropdown-link :href="route('cvUpdate', ['id' => $data->cv_id])">
                            {{ __('Edit CV') }}
                        </x-dropdown-link>
						<x-dropdown-link>
							<form action="{{ route('DeleteCV', ['id' => $data->cv_id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this CV?');">
								@csrf
								@method('DELETE')
								<button type="submit" class="text-left w-full text-red-400 hover:text-red-600 transition-color">
									{{ __('Delete CV') }}
								</button>
							</form>
						</x-dropdown-link>



  
                    </x-slot>
                </x-dropdown>
            </div>
		  </div>
		 
		@endforeach
	@else
		No document has been created yet.
	@endif
    </div>

  </div>

</body>
</x-app-layout>
