@extends('admin.layouts.app')
@section('breadcrumb')
    <div class="flex justify-between items-center">
        <x-breadcrumb pageone="review" />
        <x-button.button-plus route="{{ route('review.create') }}" title="Create review" />
    </div>
@endsection


@section('content')

    @if (Session::has('create'))
    <x-toast.success />
    @endif
    @if (Session::has('warning'))
    <x-toast.warning />
    @endif


    <div class="bg-white dark:bg-transparent ">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        S.N</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Designation</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        rating</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Date</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($reviews as $review)
                                    <tr>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $reviews->firstItem() + $loop->index }}</td>

                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $review->name }}
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-wrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $review->designation }}
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-wrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $review->rating }}
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-wrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $review->date }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">

                                            <x-table.crudactionbutton route="review" :id="$review->id" />
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No review found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="py-4">
                        {{ $reviews->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
