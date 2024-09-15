@php
    use App\Models\Client;
    $clients = Client::all();
@endphp
<section>
    <div class="container mx-auto">
        <div id="featureOwlSlider" class="flex  owl-carousel owl-theme space-x-4 py-10">
            @foreach ($clients as $client)
                <img src="{{ asset('storage/'.$client->thumbnail) }}" class="max-h-32 min-h-32 shadow-xl md:max-h-36
                 w-full" alt="" srcset="">
            @endforeach
        </div>
    </div>
</section>
