@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Category" class="py-2" pageoneRoute="{{ route('service.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Title" name="title" />
                                <div class="">
                                    <label for="" class="text-gray-500 dark:text-gray-200 text-sm font-medium">
                                        Description</label>
                                    <textarea name="description" id="myeditorinstance" cols="15" rows="2"></textarea>
                                    @error('description')
                                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <x-form.select-status />
                                <label for="category_ids" class="block text-sm font-medium mb-2 dark:text-white">Select
                                    Category</label>
                                <select id="category_ids" name="category_ids[]"
                                    class="js-example-basic-multiple py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                    multiple="multiple">
                                    <option>Select Categories</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <input class="dropify" type="file" id="myDropify" name="thumbnail">

                                <x-divider title="SEO Section" />
                                <x-form.input label="Meta Title" name="meta_title" />
                                <x-form.textarea label="Meta Description" name="meta_description" />
                                <x-form.input label="Meta Keyword" name="meta_keyword" />
                            </div>
                        </div>
                </div>
                <x-form.submit-button />
                </form>
            </div>
        </div>
    @endsection

    @push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <style>
            .dropify-message p {
                font-size: 24px
            }
            .tox .tox-promotion-link {
            visibility: hidden;
        }
        </style>
    @endpush

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ asset('js/dropify.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
        <script>
            tinymce.init({
                license_key: 'gpl',
                selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code table lists image',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image',
                image_title: true,
                file_picker_types: 'image',
                image_uploadtab: true,

                paste_data_images: false,
                images_upload_url: '{{ route('editorimagestore') . '?_token=' . csrf_token() }}',
                automatic_uploads: true,
            });
        </script>
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
                $('.js-example-basic-multiple').select2();

            });
        </script>
    @endpush
