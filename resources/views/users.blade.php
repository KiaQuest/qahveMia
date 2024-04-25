<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Qahve Mia (users)</title>
    <style>
        .up {
            margin: 1em;
        }
        svg {
            width: 1em;
        }
        .dis {
            display: inline-block !important;
        }
        #s1 {
            width: 50%;
        }
        @media only screen and (max-width: 600px) {
            .mobile1 {
                display: none;
            }

        }
        .fl {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
        }
        .go {
            border-left: none;
            line-height: 2rem;
            border-bottom-right-radius: 5px;
        }
        .searchInput {
            display: unset;
            width: unset;
            border-right: none;
            border-top-right-radius: unset;
            border-bottom-right-radius: unset;
        }
        .left {
            border-radius: revert;
        }
    </style>
</head>
<body>


{{--< div class="container" style="margin: 10% auto">--}}



<div class="container">
<div class="fl">
    <div class="up " style="display: flex;">
        <span class="">
            <a href="{{ route('addUser') }}">
                <button class="left"> Add User </button>
            </a>
        </span>
           
        <div class="ff" >
            <a href="{{ route('main') }}">
                <button type="submit" class="left">Ana menu</button>
            </a>
        </div>

    </div>


{{--    <div class="dis">--}}
{{--        <form action="" method="get" class="dis">--}}

{{--            <input class="form-control dis" type="text" name="search" id="s1">--}}
{{--            <button type="submit" id="s2">Search</button>--}}

{{--        </form>--}}
{{--    </div>--}}
    <div class="dis">
    <form action="{{ route('users') }}" method="get">
    <input type="text" name="search" id="" placeholder="Search . . ." class="form-control searchInput"><button type="submit" class="go">Go</button>
    </form>
    </div>
</div>
    <table class="table table-striped" style="text-align: center">
        <thead>
        <tr>
            <th scope="col" class="mobile1">#</th>
            <th scope="col">Name</th>
            <th scope="col">Tel</th>
            <th scope="col" class="mobile1">Address</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <th scope="row" class="mobile1">{{ $user->id }}</th>
{{--                <th scope="row">{{ $loop->iteration }}</th>--}}
                <td>
                    <a href="{{route('create' , ['id' => $user->id])}}">
                        {{ $user['name'] }}
                    </a>
                </td>
                <td>{{ $user['tel'] }}</td>
                <td class="mobile1">{{ Str::limit($user->address, 35)}} </td>
                <td>{{ $user['created_at']->todatestring() }} </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $users->links() }}
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
</body>
</html>
