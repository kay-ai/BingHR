@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users')])
@include('includes.add-user')
@include('includes.edit-user')
@include('includes.delete-user')
@include('includes.messages')
@section('content')
    <div class="py-4">
        <div class="max-w-7xl px-4">
            <a class="btn btn-sm xbtn-success mb-3 ml-auto d-table" href="javascript:void(0);" role="button" data-toggle="modal" data-target="#add-user">
                Add User
            </a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 bg-white border-b border-gray-200">
                    <div class="row">
                        <table id="users-table" class="row-border" style="width:100%">
                            <thead class="xthead">
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th>Created Date</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-secondary">
                                    <td scope="row">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{asset('img/avatar/male.jpg')}}" class="img-fluid ximg">
                                            </div>
                                            <div>
                                                <p class="xname">David Wanger</p>
                                                <p>david_wanger@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-red text-white">Super Admin</span></td>
                                    <td>24th Oct. 2015</td>
                                    <td>CEO and Founder</td>
                                    <td>
                                        <i class="fa fa-pencil pr-2" aria-hidden="true"></i>
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </td>
                                </tr>
                                @if ($users)
                                    @foreach ($users as $user)
                                        <tr class="text-secondary">
                                            <td scope="row">
                                                <div class="d-flex">
                                                    <div class="avatar">
                                                        <img src="{{asset('img/avatar/female.jpg')}}" class="img-fluid ximg">
                                                    </div>
                                                    <div>
                                                        <p class="xname">{{ucfirst(strtolower($user->first_name))}} {{ucfirst(strtolower($user->last_name))}}</p>
                                                        <p>{{$user->email}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @switch($user->role)
                                                    @case($user->role == 'employee')
                                                        <span class="badge bg-light-blue">Employee</span>
                                                        @break
                                                    @case($user->role == 'hr_admin')
                                                        <span class="badge bg-green text-white">HR Admin</span>
                                                        @break
                                                    @case($user->role == 'admin')
                                                        <span class="badge bg-blue text-white">Admin</span>
                                                        @break
                                                    @case($user->role == 'super_admin')
                                                        <span class="badge bg-red text-white">Super Admin</span>
                                                        @break
                                                @endswitch
                                            </td>
                                            <td>{{Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}</td>
                                            <td>
                                                @switch($user->role)
                                                    @case($user->role == 'employee')
                                                        Web Developer
                                                        @break
                                                    @case($user->role == 'hr_admin')
                                                        HR
                                                        @break
                                                    @case($user->role == 'admin')
                                                        Team Lead
                                                        @break
                                                    @case($user->role == 'super_admin')
                                                        CEO and Founder
                                                        @break
                                                @endswitch
                                            </td>
                                            <td>
                                                <a class="edit-btn" data-toggle="modal" data-target="#edit-user" onclick="editUserData({{$user->id}})" href="javascript:void(0);" role="button">
                                                    <i class="fa fa-pencil pr-2" aria-hidden="true"></i>
                                                </a>

                                                <a class="delete-btn" data-toggle="modal" data-target="#delete-btn" onclick="deleteData({{$user->id}})" href="javascript:void(0);" role="button">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();

            $('input[type="search"]').attr("placeholder", "Search...");
            $('<i class="fa fa-search xsearch-btn" aria-hidden="true"></i>').insertAfter('input[type="search"]');
            $('<p class="xtable-name">List Users</p>').insertAfter('#users-table_length');
        });
    </script>
@endpush
