@extends('layouts.app')
@section('title','Cart')
@section('content')
<div class="container" style="margin-top: 80px">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Name</th>
            <th style="width:10%">Genre</th>
            <th style="width:8%">Date</th>
            <th style="width:22%" class="text-center">Quantity</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $movie)

                <tr>
                    <td data-th="Name">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $movie['image'] }}"  class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $movie['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Genre">{{ $movie['genre'] }}</td>

                    <td data-th="Date">{{ $movie['date'] }}</td>
                    <td data-th="Plan" class="text-center">{{ $movie['plan'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>

        <tr>
            <td><a href="{{ url('/cartoon') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"></td>
        </tr>
        </tfoot>
    </table>
</div>



    <script type="text/javascript">

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection
