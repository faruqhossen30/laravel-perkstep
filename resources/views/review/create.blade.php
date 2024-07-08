@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Category" class="py-2" pageoneRoute="{{ route('review.index') }}" pagetwo="Create" />
@endsection




@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Name" name="name" />
                                <x-form.input label="Designation" name="designation" />
                                <div class="py-2">
                                    <textarea name="review" class="ckeditor" id="editor" cols="30" rows="10"></textarea>
                                    @error('review')
                                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <input class="dropify" type="file" id="myDropify" name="thumbnail">
                                {{-- <x-form.input label="Rating" name="rating" type="number" /> --}}


                         <div class="py-2">
                            <select id="" name="rating"
                            class=" py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <option value="">Select Rating</option>
                            <option value="1">One Star</option>
                            <option value="2">Two Star</option>
                            <option value="3">Three Star</option>
                            <option value="4">Four Star</option>
                            <option value="5">Five Star</option>
                        </select>
                         </div>
                                <x-form.input label="Review Date" name="date" type="date" />
                            </div>

                        </div>



                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        @endsection

        @push('styles')
            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
            <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
            <style>
                .dropify-message p {
                    font-size: 24px
                }
            </style>
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
            <script src="{{ asset('js/dropify.min.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('.dropify').dropify({
                        messages: {
                            'default': 'Drag and drop a file here or click',
                            'replace': 'Drag and drop or click to replace',
                            'remove': 'Remove',
                            'error': 'Ooops, something wrong happended.'
                        }
                    });

                });
            </script>
        @endpush
