@extends('layouts.main')

@section('content')

@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries=places&callback=initialize&language=pt-BR&region=BR" async defer></script>
<script src="/js/mapInput.js"></script>
<script>
</script>
@endsection