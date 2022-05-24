@extends('layouts.crud')

@section('content')

<div class="card">
    <div class="card-header">
        Editar
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("ecoponto.update", [$ecoponto->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">Nome </label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $ecoponto->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                
            </div>


            <div class="form-group">
                <label for="address">Endereço</label>
                <input class="form-control map-input {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $ecoponto->address) }}">
                <input type="hidden" name="latitude" id="address-latitude" value="{{ old('latitude', $ecoponto->latitude) ?? '0' }}" />
                <input type="hidden" name="longitude" id="address-longitude" value="{{ old('longitude', $ecoponto->longitude) ?? '0' }}" />
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                
            </div>
            <div id="address-map-container" class="mb-2" style="width:100%;height:400px; ">
                <div style="width: 100%; height: 100%" id="address-map"></div>
            </div>      

            <div class="form-group">
                <button class="btn btn-primary" type="submit">
                    Editar
                </button>
            </div>
        </form>

    </div>
</div>
@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initialize&language=en&region=GB" async defer></script>
<script src="/js/mapInput.js"></script>
<script>
    var uploadedPhotosMap = {}

</script>
@endsection