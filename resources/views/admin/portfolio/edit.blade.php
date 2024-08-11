@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Portfolio" pageoneRoute="{{ route('portfolio.index') }}" pagetwo="Create" />
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
                    <form action="{{ route('portfolio.update',$portfolio->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-8 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Title" name="title" value="{{ $portfolio->title }}" />

                                    <textarea name="description" id="myeditorinstance" cols="30" rows="10">{{ $portfolio->description }}</textarea>
                                    @error('description')
                                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                    @enderror
                                    <x-form.select-status :status="$portfolio->status" />


                                        <label for="category_ids" class="block text-sm font-medium mb-2 dark:text-white">Select
                                            Service</label>
                                        <select id="category_ids" name="category_ids[]"
                                            class="js-example-basic-multiple py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            multiple="multiple">
                                            <option>Select Categories</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}"
                                                    @if (in_array($cat->id, $cat_ids)) selected @endif>{{ $cat->name }}
                                                </option>
                                            @endforeach
                            </select>

                            </div>
                            <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                    <div class="col-span-3 pt-1 space-y-2">
                                        <label for="thumbnail"
                                            class="text-gray-500 dark:text-gray-500 text-sm font-medium">Image</label>
                                        <input name="thumbnail" class="dropify" type="file" id="myDropify"
                                            data-default-file="{{ asset('storage/' . $portfolio->thumbnail) }}">
                                    </div>

                                    <x-divider title="SEO Section" />
                                    <x-form.input label="Meta Title" name="meta_title"  value="{{ $portfolio->meta_title }}" />
                                    <x-form.textarea label="Meta Description" name="meta_description" value="{{ $portfolio->meta_description }}" />
                                    <x-form.input label="Meta Keyword" name="meta_keyword" value="{{ $portfolio->meta_keyword }}"  />
                            </div>
                        </div>
                        <x-form.submit-button  title="Update"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }
        .tox .tox-promotion-link {
            visibility: hidden;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            license_key: 'gpl',
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists image',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image',
            image_title: true,
            file_picker_types: 'image',
            image_uploadtab: true,

            paste_data_images:false,
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



