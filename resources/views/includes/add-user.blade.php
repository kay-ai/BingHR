<!-- Modal -->
<div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 900;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-0 mt-2">
                    <div class="p-3">
                        <div class="row mb-3">
                            <div class="col-md-12 ">
                                <input class="xinput full-width" name="employee_id" type="text" placeholder="Employee ID *">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 pr-2">
                                <input class="xinput full-width" name="first_name" type="text" placeholder="First Name *">
                            </div>
                            <div class="col-md-6 pl-2">
                                <input class="xinput full-width" name="last_name" type="text" placeholder="Last Name *">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 pr-2">
                                <input class="xinput full-width" name="email" type="text" placeholder="Email *">
                            </div>

                            <div class="col-md-4 px-2">
                                <input class="xinput full-width" name="phone" type="text" placeholder="Mobile Number">
                            </div>
                            <div class="col-md-4 pl-2">
                                <select name="role" id="" class="xinput xdrop-down full-width">
                                    <option value="" selected>Select Role Type</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 pr-2">
                                <input class="xinput full-width" name="username" type="text" placeholder="Username *">
                            </div>
                            <div class="col-md-4 px-2">
                                <input class="xinput full-width" name="password" type="password" placeholder="Password *">
                            </div>
                            <div class="col-md-4 pl-2">
                                <input class="xinput full-width" name="confirm-password" type="password" placeholder="Confirm Password *">
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
