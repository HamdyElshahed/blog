@extends('layouts.app')
<style>
   .box{
       /* width: 28%; */
       /* margin: 1rem; */
       box-shadow: 0px 0px 7px 0px rgb(134, 130, 130);
       background-color: rgb(57, 189, 223);
       border-radius: 5px;
       max-height:25rem;
   }
   .box p{
      padding: 0.2rem 0.1rem;
      /* text-align: center; */
      overflow: hidden;
    }
    .images{
       overflow: hidden;
       height: 47%;
       border-radius: 5px;
    }

    .image{
      width: 100%;
      height: 100%;
    
    }

    #image_3:hover{
      transform: scale(2,2);
      transition: all 3s ;
    }

    .vh{
        overflow: hidden;
    }


</style>

@section('content')
    <div class="row mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Articles</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('articles.create') }}"> Create New Article</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
      <div class="row"> 
            @foreach ($articles as $article)
               <div class="col-4">
                   <div class=" box">
                      <div class="images"> 
                         <img src="/image/{{ $article->image }}" alt="invalid" class="image" id="image_3">
                      </div>
                      <h5 class="px-1"> Title: {{ $article->title }}</h5>
                      <h4 class="px-1"> Content</h4>
                      <div class="px-1 vh">
                         {{ $article->content }}
                      </div>
                      <div class="px-1">
                          <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                              <a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Show</a>
                              <a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
    
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>     
                          </form>
                      </div>

                   </div>
                </div>
                @endforeach
       </div>

    </div>


    {!! $articles->links() !!}


@endsection

