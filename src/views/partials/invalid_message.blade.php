@if ($errors->has($input))
    <span class="d-block text-danger" id="error-{{ $input }}">
        <small>{{ $errors->first($input) }}</small>
    </span>
@endif
