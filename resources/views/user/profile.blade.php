    @extends('layouts.app')
<style>
    .wikitar{
        max-width: 100px;
    }
    .user-name{
        font-weight: 600;
    }
</style>
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="profile-img">
                        <img src="/img/wikitar.jpg" class="wikitar">
                    </div>
                    <div class="user-name">
                        {{$user->name}}
                    </div>
                    <div class="user-dob">
                        {{$user->dob->format('l j F Y')}} <br> ({{ $user->dob->age }} Years old)
                    </div>
                    <button class="btn btn-primary" type="submit">Follow</button>

                </div>
            </div>
        </div>
    @endsection