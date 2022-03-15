<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tasks Detail
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">No. OF Images</th>
                            <th class="px-4 py-2">Detail</th>
                            <th class="px-4 py-2">status</th>
                            <th class="px-4 py-2">Assignee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $title }}</td>
                            <td class="border px-4 py-2">{{ $no_of_images }}</td>
                            <td class="border px-4 py-2">{{ $detail }}</td>
                            <td class="border px-4 py-2">@if($status === '0'){{ "Not Assigned" }}@elseif($status === '1'){{ "In Progress" }}@else{{ "Completed" }} @endif</td>
                            <td class="border px-4 py-2">{{ $assignee_name }}</td>
                        </tr>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
    @if($status === '2')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    @foreach ($ImgUrl as $url)
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="{{ $url }}" alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>