@extends('allfiles.admin')
<style>
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
        }

        textarea {
            resize: none;
            height: 50px; /* Set the desired height */
        }
    </style>

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  class="card-header"><h2>Create Tour</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('internationals.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title"><b>Title:</b></label>
                            <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}" required>
                        </div>
                      
                        <div class="form-group">
                            <label for="description"><b>Description:</b></label>
                        <textarea name="description" id="description" cols="30" rows="30" required>{{old('description')}}</textarea>                        
                        </div>
                       
                        <div class="form-group">
                            <label for="image"><b>Image:</b></label>
                            <input type="file" name="image" class="form-control" id="image"required>
                        </div>
                        <button type="submit" class="btn btn-primary"><b>Save</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Add CSS styles to make it stylish and responsive */
    .card {
        margin: 20px;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>
</style>
@endsection
