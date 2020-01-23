{{-- Laravel blade component for a vertex shader --}}

<script type="x-shader/x-vertex" id="{{ $shader_id }}">
    @php
    $shader_str =
    @file_get_contents($shader_path);
    if ($shader_str) {
        echo $shader_str;
    }
    @endphp
</script>
