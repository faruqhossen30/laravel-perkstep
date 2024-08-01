@php
    use App\Models\Client;
    $clients = Client::all();
@endphp



<section>
    <div class=" mx-auto">
        <div id="featureOwlSlider" class="flex  owl-carousel owl-theme space-x-3 py-10">
            @foreach ($clients as $client)
                <img src="{{ asset('storage/'.$client->thumbnail) }}" alt="" srcset="">
            @endforeach
        </div>
    </div>
</section>
