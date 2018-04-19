@if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <small style="color: red; font-weight: bold">{{ $error }}</small>
            @endforeach
    </div>
@endif