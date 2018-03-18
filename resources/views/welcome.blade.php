@extends('layouts.home')
@section('content')
<div>
    <div>
        <div>
            <div>
                <div>List of Game of Thrones Characters</div>
               
                  <table class="table" border="1">
                          <tr>
                              <th>Character</th>
                              <th>Real Name</th>
                          </tr>
                          @foreach($characters as $key => $value)
                            <tr>
                              <td>{{$key}}</td><td>{{$value}}</td>
                            </tr>
                          @endforeach
                      </table>
                       <?php dd($characters); ?>
                   // @if(Auth::check())
                   // @endif
            </div>
            //@if(Auth::guest())
              <a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >></a>
           // @endif
        </div>
    </div>
</div>
@stop