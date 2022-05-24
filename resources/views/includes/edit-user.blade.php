<!-- Modal -->
<div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 900;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form id="edit-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-0 mt-2">
                    <div class="p-3">
                        <div class="row mb-3">
                            <div class="col-md-12 ">
                                <input class="xinput full-width" id="employee_id" name="employee_id" type="text" placeholder="Employee ID *" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 pr-2">
                                <input class="xinput full-width" id="first_name" name="first_name" type="text" placeholder="First Name *" value="" required>
                            </div>
                            <div class="col-md-6 pl-2">
                                <input class="xinput full-width" id="last_name" name="last_name" type="text" placeholder="Last Name *" value="" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 pr-2">
                                <input class="xinput full-width" id="email" name="email" type="text" placeholder="Email *" value="" required>
                            </div>

                            <div class="col-md-4 px-2">
                                <input class="xinput full-width" id="phone" name="phone" type="text" placeholder="Mobile Number" value="">
                            </div>
                            <div class="col-md-4 pl-2">
                                <select name="role" id="role" class="xinput xdrop-down full-width">
                                    <option id="role-opt" value="" selected></option>
                                    <option value="admin">Admin</option>
                                    <option value="employee">Employee</option>
                                    <option value="hr_admin">HR Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 pr-2">
                                <input class="xinput full-width" id="username" name="username" type="text" placeholder="Username *" value="" required>
                            </div>
                            <div class="col-md-4 px-2">
                                <input class="xinput full-width" name="password" type="password" placeholder="Password *" value="">
                            </div>
                            <div class="col-md-4 pl-2">
                                <input class="xinput full-width" name="password_confirmation" type="password" placeholder="Confirm Password *">
                            </div>
                        </div>
                    </div>
                    <table class="xtable table mt-3">
                        <thead>
                            <tr>
                                <th class="pl-4">Module Permission</th>
                                <th class="text-center">Read</th>
                                <th class="text-center">Write</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="pl-4">Super Admin</td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="pl-4">Admin</td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="pl-4">Employee</td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" class="pl-4">HR Admin</td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input x-checkbox" name="" id="" value="checkedValue" checked>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm xbtn-primary">Add User</button>
                    <button type="button" class="btn btn-sm xbtn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script>
        function editUserData(userid) {
            $.ajax({
                url: '/edit-user/'+ userid,
                type: 'POST',
                data: {
                        _token: '{{csrf_token()}}'
                    },
                dataType: 'json',
                beforeSend: function(){
                    $('#loading-edit-user').removeClass('hide');
                },
                success: function (response) {
                    if (response.user.length == 0) {
                        console.log( "No User Found");
                    } else {
                        // set values
                        $('#edit-form').attr('action', '{{ route("users.update", ":userid") }}');
                        $('#first_name').val( response.user.first_name );
                        $('#last_name').val( response.user.last_name );
                        $('#email').val( response.user.email );
                        $('#username').val( response.user.username );
                        $('#role').val( response.user.role );
                        $('#role-opt').html( response.user.role );
                        $('#employee_id').val( response.user.employee_id );
                        $('#phone').val( response.user.phone );
                    }
                },
                complete: function(){
                    $('#loading-edit-user').addClass('hide');
                }
            });
        }
    </script>


@endpush
