<div class="form-group">
    <label>{{ $title }}</label>
    <input type="file" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" value="{{ $value }}">
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>