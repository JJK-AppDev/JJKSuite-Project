<form id="form-save-facility" class="row g-3" method="POST" action="{{ route('facility.store') }}">
    @csrf
    <div class="col-md-12">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            name="name" value="{{ old('name') }}">
        @error('name')
            <div class="text-danger mt-1">
                {{ $message }}
            </div>
        @enderror
        <div id="error_name" class="text-danger error"></div>
    </div>
    <div class="col-md-12">
        <label for="detail" class="form-label">Detail</label>
        <textarea class="form-control" id="detail" name="detail" rows="3">{{ old('detail') }}</textarea>
        @error('detail')
            <div class="text-danger mt-1">
                {{ $message }}
            </div>
        @enderror
        <div id="error_detail" class="text-danger error"></div>
    </div>
</form>
