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
    </style>
</head>
<body>


<div class="container" style="margin: 10% auto">
    <form action="{{ route('addUserAction') }}" method="post">
        @csrf

        <div class="form-group row">
            <label for="tel" class="col-sm-2 col-form-label">Telephon <span> * </span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tel" placeholder="09" name="tel" required>
            </div>
        </div>


        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>
        </div>

        <div class="form-group row">
            <label for="Address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Address" placeholder="Address" name="address">
            </div>
        </div>

        {{--    <div class="form-group row">--}}
        {{--        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>--}}
        {{--        <div class="col-sm-10">--}}
        {{--            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">--}}
        {{--        </div>--}}
        {{--    </div>--}}
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password <span> * </span></label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
            </div>
        </div>

        <fieldset class="form-group">
            <div class="row" style="border: 3px burlywood dashed; border-radius: 15px;">
                <legend class="col-form-label col-sm-2 pt-0">Rol</legend>
                <span style="position: absolute; right: 5%;"> premium </span>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="gridRadios1"
                               checked>
                        <label class="form-check-label" for="gridRadios1">
                            Customer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2"
                               disabled>
                        <label class="form-check-label" for="gridRadios2">
                            Admin
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3"
                               disabled>
                        <label class="form-check-label" for="gridRadios3">
                            reserved
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        {{--    <div class="form-group row">--}}
        {{--        <div class="col-sm-2">Checkbox</div>--}}
        {{--        <div class="col-sm-10">--}}
        {{--            <div class="form-check">--}}
        {{--                <input class="form-check-input" type="checkbox" id="gridCheck1">--}}
        {{--                <label class="form-check-label" for="gridCheck1">--}}
        {{--                    Example checkbox--}}
        {{--                </label>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
        </div>
    </form>

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


<?php
