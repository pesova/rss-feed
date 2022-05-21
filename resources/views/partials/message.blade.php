@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-auto mb-4 text-gray-50 bg-green-500 font-bold rounded-xl py-4 px-3">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-3/5 mb-4 text-gray-50 bg-red-400 font-bold rounded-lg py-4 px-3">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('error'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-auto mb-4 text-gray-50 bg-red-400 font-bold rounded-xl py-4 px-3">
            {{ session()->get('error') }}
        </p>
    </div>
@endif