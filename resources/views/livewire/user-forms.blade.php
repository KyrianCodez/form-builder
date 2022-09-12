<div class=" mt-10 ml-5">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Recent Forms') }}
    </h2>
    @foreach ($userforms as $form)
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{$form->name}}</h5>
          <p class="text-gray-700 text-base mb-4">
           
          </p>
          <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
        </div>
      </div> 
    @endforeach
</div>
