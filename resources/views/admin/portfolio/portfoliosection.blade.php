@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Portfolio" pageoneRoute="{{ route('portfolio.index') }}" pagetwo="Create new page" />
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="dark:text-slate-400 p-2">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <form action="{{route('portfolio.section.store', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex gap-4 py-4">
                            <button type="button" id="addImageSection"
                                class="py-3 w-full px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>

                                Add Section
                            </button>
                        </div>

                        <div id="items">
                            @foreach ($portfolio->sections as $section)
                            <div
                                class="flex flex-col my-4 bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                <div
                                    class="flex justify-between bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
                                        Insert Section
                                    </p>
                                    <button type="button" class="removesectionbutton">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="grid grid-cols-12 gap-6 px-6 py-6">
                                    <div class="col-span-9">
                                        <x-form.input label="Title" name="title[]" value="{{$section->title}}" />
                                        <x-form.textarea label="Description" name="description[]" value="{{ $section->description }}" />
                                    </div>
                                    <div class="col-span-3 pt-8">
                                        <input type="text" class="hidden" name="images[]" value="{{ $section->thumbnail }}">
                                        <input class="dropify" type="file" id="myDropify" name="thumbnail[]" data-default-file="{{ asset('storage/' . $section->thumbnail) }}">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('styles')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
    <style>
        .label-info {
            background-color: blue;
            padding: 8px 16px;
            color: white;
            border-radius: 16px;
            font-weight: bold;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('plugin/Sortable.min.js') }}"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        function createDropify() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        }
        var drEvent = $('.dropify').dropify();

        drEvent.on('dropify.afterClear', function(event, element) {
            console.log('File deleted');


            console.log($(this).parent().pa);
        });

        // $(document).on('click', '.dropify-clea', function() {
        //     $(this).parent().closest('.hideinput').empty();
        // })
    </script>
    <script>
        $(document).ready(function() {
            createDropify()
            $(document).on('click', '#addImageSection', function() {
                let itemLength = $('#items').children().length;
                console.log(itemLength);
                $('#items').append(`
                <div
                    class="flex flex-col my-4 bg-white border shadow-sm rounded-xl dark:bg-slate-900   dark:border-gray-700 dark:shadow-slate-700/[.7]">
                    <div
                        class="flex justify-between bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-slate-900 dark:border-gray-700">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-500">
                            Insert Section
                        </p>
                        <button type="button" class="removesectionbutton">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>

                    </div>
                            <div class="grid grid-cols-12 gap-6 px-6 py-6">
                        <div class="col-span-9">
                            <div>
                                <label for="title${itemLength}" class="text-gray-500 dark:text-gray-200 text-sm font-medium">Title</label>
                                <input type="text" name='title[]' id="title${itemLength}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200 dark:focus:ring-gray-600"  placeholder="Title" />
                            </div>
                        <div class="py-3">
                            <label for="textarea-label${itemLength}"
                                class=" text-gray-500 dark:text-gray-200 text-sm font-medium" >Description</label>
                            <textarea id="textarea-label${itemLength}" name="description[]"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                rows="6" placeholder="Your text here"></textarea>
                        </div>
                        </div>
                        <div class="col-span-3 pt-8">
                            <input class="dropify" type="file" id="myDropify" name="thumbnail[]">
                        </div>
                    </div>

                `)
                // CKEDITOR.replace(`editor${itemLength}`);
                createDropify()
            });
        });

        $(document).on('click', '.removesectionbutton', function() {
            $(this).parent().parent().remove();
        });
        var simpleList = document.querySelector("#items");
        new Sortable(simpleList, {
            animation: 150,
            ghostClass: 'bg-light'
        });
    </script>
@endpush
