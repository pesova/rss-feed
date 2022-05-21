@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-5">
        <h3 class="text-3xl font-bold">
            Create Feed
        </h3>
    </div>
</div>
 
@include('partials.message')

<div class="w-4/5 m-auto py-10">
    <form 
        action="{{ route('feed.store') }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="url"
            placeholder="Feed url..."
            required
            class="bg-transparent block border-b-2 w-full h-20 text-xl outline-none mb-3">

        <input 
            type="number"
            name="frequency"
            placeholder="Feed polling frequency..."
            class="bg-transparent block border-b-2 w-full h-20 text-lg outline-none">

        <button    
            type="submit"
            class="mt-3 bg-blue-500 text-gray-100 font-bold float-right text-lg py-2 px-4 rounded-xl">
            Submit
        </button>
        
    </form>
</div>

<div class="container py-10 mx-auto">
    <div class="mb-14 text-center">
        <h2 class="mt-2 text-xl font-bold font-heading">Manage Feeds </h2>
    </div>

    <div class="flex flex-wrap -m-6">
        @foreach ($feeds as $feed)
            <div class="relative w-full p-6">
                <div class="flex relative z-10 bg-gray-300 rounded-lg">

                    <div class="px-3 pb-5 w-full">
                        <p class="inline-block pt-4 text-lg font-bold border-t border-gray-400">{{ $feed->url }}</p>
                        <p>Polling Frequency: {{ $feed->frequency ? $feed->frequency : 'Not Set' }}</p>
                        <small>
                            {{ $feed->created_at->diffForHumans() }}
                        </small>
                    </div>

                    <div class="flex p-3 justify-end">
                        <a title="Edit" href="javascript:void(0)" class="flex items-center px-2">
                            <svg fill="#0085ff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="20px" height="24px"><path d="M 18.400391 2 C 18.100391 2 17.899219 2.1007812 17.699219 2.3007812 L 15.707031 4.2929688 L 14.292969 5.7070312 L 3 17 L 3 21 L 7 21 L 21.699219 6.3007812 C 22.099219 5.9007812 22.099219 5.3003906 21.699219 4.9003906 L 19.099609 2.3007812 C 18.899609 2.1007812 18.700391 2 18.400391 2 z M 18.400391 4.4003906 L 19.599609 5.5996094 L 18.306641 6.8925781 L 17.107422 5.6933594 L 18.400391 4.4003906 z M 15.693359 7.1074219 L 16.892578 8.3066406 L 6.1992188 19 L 5 19 L 5 17.800781 L 15.693359 7.1074219 z"/></svg>
                        </a>
                        <a class="flex items-center " title="Delete" href="javascript:void(0)" onclick="deleteAction({{ $feed->id }})" data-modal-toggle="popup-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="20" height="24"
                                viewBox="0 0 24 24"
                                style=" fill:#b70909;"><path d="M 10.806641 2 C 10.289641 2 9.7956875 2.2043125 9.4296875 2.5703125 L 9 3 L 4 3 A 1.0001 1.0001 0 1 0 4 5 L 20 5 A 1.0001 1.0001 0 1 0 20 3 L 15 3 L 14.570312 2.5703125 C 14.205312 2.2043125 13.710359 2 13.193359 2 L 10.806641 2 z M 4.3652344 7 L 5.8925781 20.263672 C 6.0245781 21.253672 6.877 22 7.875 22 L 16.123047 22 C 17.121047 22 17.974422 21.254859 18.107422 20.255859 L 19.634766 7 L 4.3652344 7 z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div> 
        @endforeach
        
    </div>

      
      <div id="deleteFeed" tabindex="-1" class="hidden flex justify-center items-center mb-16 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full m-auto">
          <div class="relative p-4 w-full max-w-md h-full md:h-auto">
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <button type="button" onclick="closeModal()" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                  </button>
                  <div class="p-6 text-center">
                      <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>

                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                          Are you sure you want to delete this feed and its items?
                        </h3>

                        <form id="deleteForm"  method="post">

                            @csrf
                            @method('DELETE')

                            <button data-modal-toggle="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, I'm sure
                            </button>
                            <button onclick="closeModal()" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" >No, cancel</button>
                      
                        </form>

                      
                  </div>
              </div>
          </div>
      </div>
</div>

@endsection

{{-- yield script --}}
@section('script')

    <script>
        function deleteAction(id) {
            $('#deleteFeed').removeClass('hidden');
            $('body').addClass('overflow-hidden');
            let url = "{{ route('feed.destroy', 1) }}";
            let formatted_url = url.replace('1', id);
            console.log(formatted_url);
            $('#deleteForm').attr('action', formatted_url);

        }

        function closeModal() {
            $('#deleteFeed').addClass('hidden');
            $('body').removeClass('overflow-hidden');
        }
    </script>


@endsection