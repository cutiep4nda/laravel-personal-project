<x-layouts.dashboard>
    <div class="w-4/6 mx-auto flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-white rounded-md shadow-lg p-5">
    <form method="POST" action="#" enctype="multipart/form-data">
      @csrf
        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file" name="image" required>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
    </div>
</x-layouts.dashboard>