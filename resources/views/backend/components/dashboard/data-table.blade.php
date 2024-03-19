    <!-- data table -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Hover rows</h5>
        </div>

        <table class="table datatable-basic table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="align-middle">
                        <div class="dropdown">
                            <a href="#" class="text-body dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="ph-gear"></i>
                            </a>

                            <div class="dropdown-menu">
                                <a href="{{ url('admin/dashboard/edit') }}" class="dropdown-item">
                                    <i class="ph-pen me-2"></i>
                                    Edit 
                                </a>
                                <a href="{{ url('admin/dashboard/view') }}" class="dropdown-item">
                                    <i class="ph-eye me-2"></i>
                                    View 
                                </a>
                                <a   class="deleteBtn text-danger dropdown-item">
                                    <i class="ph-trash me-2"></i>
                                    Remove
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /data table -->