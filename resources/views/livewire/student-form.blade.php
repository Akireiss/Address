<div>
    <div class="mb-3">
        <label for="city-select">City</label>
        <select class="form-control" id="city-select" wire:model="selectedCity">
            <option value="">Select A City</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->city }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="municipality-select">Municipality</label>
        <select class="form-control" id="municipality-select" wire:model="selectedMunicipality">
            <option value="">Select A Municipality</option>
            @foreach($municipalities as $municipality)
                <option value="{{ $municipality->id }}">{{ $municipality->municipality }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="barangay-select">Barangay</label>
        <select class="form-control" id="barangay-select" wire:model="selectedBarangay">
            <option value="">Select A Barangay</option>
            @foreach($barangays as $barangay)
                <option value="{{ $barangay->id }}">{{ $barangay->barangay }}</option>
            @endforeach
        </select>
    </div>
</div>

@push('scripts')

<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('municipalitiesUpdated', function (municipalities) {
            $('#municipality-select').empty();
            $('#municipality-select').append('<option value="">Select A Municipality</option>');

            municipalities.forEach(function (municipality) {
                $('#municipality-select').append('<option value="' + municipality.id + '">' + municipality.municipality + '</option>');
            });
        });

        Livewire.on('barangaysUpdated', function (barangays) {
            $('#barangay-select').empty();
            $('#barangay-select').append('<option value="">Select A Barangay</option>');

            barangays.forEach(function (barangay) {
                $('#barangay-select').append('<option value="' + barangay.id + '">' + barangay.barangay + '</option>');
            });
        });
    });
</script>

@endpush
