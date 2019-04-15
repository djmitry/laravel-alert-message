@foreach ($messages as $item)
    @if ($item['type'] == 'success')
        <div class="alert alert-success">
    @elseif ($item['type'] == 'error')
        <div class="alert alert-danger">
    @endif
        {{ $item['message'] }}
    </div>
@endforeach