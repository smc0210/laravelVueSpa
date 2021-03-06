@extends('layouts.postapp')

@section('content')
    <header>
        <h1>Create</h1>
    </header>

    <main>
        <form action="/posts" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" value="{{ old('title') }}" >

                <label for="body">Body</label>
                <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" id="body" rows="5">{{ old('body') }}</textarea>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">submit</button>
        </form>

    </main>

@endsection


@section('script')
    <script>
        function goCreate() {

        }
    </script>
@endsection
