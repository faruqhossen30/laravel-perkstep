@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Package" class="py-2" pageoneRoute="" pagetwo="Create" />
@endsection

@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('faq.update', $faq->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <x-form.input label="Question" name="question" value="{{$faq->question}}" />
                                <div class="py-2">
                                    <x-form.textarea label="Answer" name="answer" value="{{ $faq->answer }}" />
                                    @error('answer')
                                        <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <x-form.submit-button title="Update" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

