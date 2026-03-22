@props(['field'])

@error($field)
<p style="color: red;">{{ $message }}</p>
@enderror
