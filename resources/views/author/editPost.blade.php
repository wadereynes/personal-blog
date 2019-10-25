@extends('layouts.admin')

@section('tile') Editing {{ $post->title}} @endsection

@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header bg-light">
                      Editing {{ $post->title }}
                  </div>
                  @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                  @endif

                  @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                   </div>
                  @endif

                  <form action="{{ route('postEditPost', $post->id) }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Title</label>
                                    <input name="title" id="normal-input" class="form-control" value="{{ $post->title }}" placeholder="Post Title">
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="placeholder-input" class="form-control-label">Content</label>
                                    <textarea class="form-control" name="content" id="" rows="10" cols="30" placeholder="Post content">{{ $post->content }}</textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Update post</button>
                    </div>
                  </form>

              </div>
          </div>
      </div>


  </div>
</div>
@endsection
