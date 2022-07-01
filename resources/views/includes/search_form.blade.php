<div class="container mx-auto p-5 rounded-md bg-white mt-16">
    <form action="">
        <h1 class="text-4xl font-bold text-gray-700 mb-10 text-center">Search Companies</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <div class="mt-1">
                    <input @if(request()->has('name')) value="{{ request()->get('name') }}" @endif type="text" name="name" id="name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Name">
                </div>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="">Choose status</option>
                    @foreach($statuses as $status)
                        <option
                            @if(request()->has('status'))
                                @if(request()->get('status') === $status->status)
                                    selected
                                @endif
                            @endif
                            value="{{ $status->status }}"
                        >
                            {{ $status->status }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="cro" class="block text-sm font-medium text-gray-700">CRO</label>
                <select name="cro" id="cro"
                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                    <option value="">Choose cro</option>
                    @foreach($cros as $cro)
                        <option
                            @if(request()->has('cro'))
                                @if(request()->get('cro') == $cro->id)
                                    selected
                            @endif
                            @endif
                            value="{{ $cro->id }}"
                        >
                            {{ $cro->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                <div class="mt-1">
                    <input @if(request()->has('start_date')) value="{{ request()->get('start_date') }}" @endif type="date" data-date="" data-date-format="YYYY-MM-DD" name="start_date" id="start_date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Start Date">
                </div>
            </div>
            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                <div class="mt-1">
                    <input @if(request()->has('end_date')) value="{{ request()->get('end_date') }}" @endif type="date" data-date="" data-date-format="YYYY-MM-DD" name="end_date" id="end_date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="End Date">
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center mt-10">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Search
            </button>
        </div>
    </form>
</div>
