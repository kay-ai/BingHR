@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Users')])
@section('content')
    <div class="py-4">
        <div class="max-w-7xl px-4">
            <a class="btn btn-sm btn-primary mb-3 ml-auto d-table" href="#" role="button">Add User</a>
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
                                <tr class="text-secondary">
                                    <td scope="row">
                                        <div class="d-flex">
                                            <div class="avatar">
                                                <img src="{{asset('img/avatar/female.jpg')}}" class="img-fluid ximg">
                                            </div>
                                            <div>
                                                <p class="xname">Ina Hogan</p>
                                                <p>windler.warren@runte.net</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-blue text-white">Admin</span></td>
                                    <td>24th Oct. 2015</td>
                                    <td>Team Lead</td>
                                    <td>
                                        <i class="fa fa-pencil pr-2" aria-hidden="true"></i>
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </td>
                                </tr>
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
