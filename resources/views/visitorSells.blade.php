<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        span {
            color: #ef4444;
        }
        svg {
            width: 1em;
        }
        body {
            /*background-color: #f8f9fa;*/
        }
    </style>
</head>
<body>


<div class="container" style="margin: 10% auto">


    <table class="table table-striped" style="text-align: center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fee</th>
            <th scope="col">Taxfif</th>
            <th scope="col" class="mobile1">Note</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        {{--        4 {{ Session::get('userID')}}3--}}
        @foreach($q1 as $sell)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    {{--                    <a href="{{route('create' , ['id' => $sell->id])}}">--}}
                    {{ number_format($sell->fee) }}
                    {{--                    </a>--}}
                </td>
                <td>{{ number_format($sell['bargain']) }}</td>
                <td class="mobile1">{{ Str::limit($sell->note, 35)}} </td>
                <td>{{ $sell['created_at']->todatestring() }} </td>
            </tr>
        @endforeach

        <tr>
            <td>x</td>
            <th>{{ number_format($sell10) }}</th>
            <th>All : {{ number_format($allBargain) }}</th>
            <td class="mobile1"></td>
{{--            <th>All : {{ number_format($all) }}</th>--}}
            <th>All : all</th>
        </tr>
        </tbody>

    </table>
    <div class="dw mobile1" style="text-align: right">
{{--        all : {{ number_format($all) }} ,--}}
        10 last sold : {{ number_format($sell10) }} , all bargains : {{ number_format($allBargain) }}
    </div>
{{--    <div class="pagination">--}}
{{--        {{ $q1->links() }}--}}
{{--    </div>--}}

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<style>
    @media only screen and (max-width: 600px) {
        .mobile1 {
            /*display: table;*/
            display: none;
            /*flex-direction: column;*/
            /*border-bottom: 5px brown groove;*/
        }
        #note {
            width: 20em;
        }
    }
</style>
{{--<script>--}}

{{--    if (window.innerWidth < 600) {--}}
{{--        document.getElementsByClassName("mobile1").setAttribute('sa','asd');--}}
{{--        // document.getElementById("my-elements").remove();--}}

{{--    }--}}

{{--</script>--}}
</body>
</html>


<?php
