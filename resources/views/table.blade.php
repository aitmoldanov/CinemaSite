@extends('layouts.app')
@section('title','Table')
<style>
    .forms input{
        background-color: #424242 !important;
        border-color: #424242!important;;
        border-radius: 5px!important;;
        height: 40px!important;;
        width: 360px!important;;
        margin-left: 20px!important;;
        color:#ffffff;
    }
</style>
@section('content')
    <body style="background-color: #1b153b; ">
    <div class="container" style="margin-top: 90px">

    <div class="col-lg-8 col-md-10 ml-auto mr-auto" style="background-color: #C8C8C8 ">
        <h4><small>Movies list</small></h4>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Date of premiere</th>
                    <th class="text-right">Quality</th>
                    <th class="text-right">Type</th>
                </tr>
                </thead>
                @foreach($movie as $mov)
                <tbody>
                <tr>
                    <td class="text-center">{{$mov->id}}</td>
                    <td><img src="{{$mov->image}}" alt="image"></td>
                    <td>{{$mov->name}}</td>
                    <td>{{$mov->genre}}</td>
                    <td>{{$mov->date}}</td>
                    <td>{{$mov->plan}}</td>
                    <td class="text-right">{{$mov->type}}</td>
                    <td class="td-actions text-right">

                        <a href="{{route('edit',$mov->id)}}"><button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" title="">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button></a>

                        <form method="POST" id="delete-form- {{ $mov->id }}" action="{{ route('delete', $mov->id) }}" style="display: none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                        </form>

                        <button onclick="if (confirm('Are you sure to delete this field')){
                            event.preventDefault();
                            document.getElementById('delete-form- {{ $mov->id }}').submit();
                            }else {
                            event.preventDefault();
                            }
                            " type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
        </div>




        {{$movie->links()}}
        </div>
    </div>
    </body>
@endsection
