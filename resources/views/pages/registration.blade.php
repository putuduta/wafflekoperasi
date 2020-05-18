@extends('layouts.layout')

@section('content')

<!-- Title -->
<section id="title">
    <div class="container-fl">
        <div class="row regis">
            <div class="col-lg-6">
                <h1 class="regis-title">Welcome Admin to the dashboard</h1>
            </div>
        </div>
    </div>
</section>


<!-- Dashboard Section -->
    <div class="container dash">
        <h2 class="dash-title">Dashboard</h2>
        <div class="card rounded-bottom">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <th scope="col" class="align-middle text-center">ID</th>
                            <th scope="col" class="align-middle text-center">Name</th>
                            <th scope="col" class="align-middle text-center">Email</th>
                            <th scope="col" class="align-middle text-center">Personal Identity</th>
                            <th scope="col" class="align-middle text-center">Bank Identity</th>
                            <th scope="col" class="align-middle text-center">Transfer Proof</th>
                            <th scope="col" class="align-middle text-center" colspan="3">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($registration as $registrations)
                                <tr>
                                    <td class="align-middle text-center">{{ $registrations->id }}</td>
                                    <td class="align-middle text-center">{{ $registrations->name }}</td>
                                    <td class="align-middle text-center">{{ $registrations->email }}</td>
                                    <td class="align-middle text-center"> 
                                        <i type="button" data-toggle="modal"data-target="#exampleModaltwo" class="fas fa-house-user fa-2x"></i>
                                        <div class="modal fade" id="exampleModaltwo" tabindex="-1" role="dialog" aria-labelledby="exampleModaltwoTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Personal Identity</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mo-res">
                                                        <p>No ID : <span> {{ $registrations->no_id}}</span></p>
                                                        <p>Address : <span> {{ $registrations->address }}</span></p>
                                                        <p>Phone Number : <span> {{ $registrations->phone_number }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center"> 
                                        <i type="button" data-toggle="modal"data-target="#exampleModalCenter" class="fas fa-money-check-alt fa-2x"></i>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Bank Identity</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mo-res">
                                                        <p>Bank Name : <span> {{ $registrations->bank_name }}</span></p>
                                                        <p>Bank Account Name : <span> {{ $registrations->bankaccount_name }}</span></p>
                                                        <p>Bank Account Number : <span> {{ $registrations->bankaccount_number }}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">{{ $registrations->transfer_proof }}</td>
                                    <td class="align-middle text-center">
                                        <a class="btn btn-sm btn-block btn-dark text-white" href="/storage/img/{{ $registrations->transfer_proof }}">L</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a class="btn btn-sm btn-block btn-dark text-white" href="{{ route('registration_show_update', $registrations->id) }}">U</a>
                                    </td>
                                    <td class="align-middle text-center">
                                        <form method="POST" action="{{ action('RegistrationController@delete', $registrations->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-sm btn-block btn-dark text-white" type="submit">D</button>
                                        </form>
                                    </td>    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection