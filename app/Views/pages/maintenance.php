<?= $this->extend('pages/main'); ?>

<?= $this->section('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">
            Pages
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="<?= base_url('maintenance'); ?>" class="active">
                Maintenance
            </a>
        </li>
    </ol>
</nav>

<div class="maintenanceBox shadow-lg rounded bg-light p-5">
    <div class="w-25 mb-3">
        <label for="maintenanceType" class="form-label">
            Choose Maintenance
        </label>
        <select name="maintenance_type" id="maintenanceType" class="form-select">
            <option value="">Select Maintenance Type</option>
            <option value="areaCode">Area Name</option>
            <option value="buildings">Buildings</option>
            <option value="findings">Findings</option>
            <option value="items">Items</option>
            <option value="priorityLevel">Priority Level</option>
            <option value="users">Users</option>
        </select>
    </div>

    <!-- add trigger modal -->
    <button type="button" class="btn btn-primary btn-sm  mb-1" data-bs-toggle="modal" id="addMaintenanceButton"
        data-bs-target="#addMaintenanceModal">
        Add
    </button>
    <!-- Modal -->
    <div class="modal fade" id="addMaintenanceModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Add Maintenance</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('add_maintenance'); ?>" method="POST">
                        <div class="mb-3">
                            <label for="building" class="form-label">Building</label>
                            <select name="building" id="building" class="form-select">
                                <option value="Select Building" selected disabled>Select Building</option>
                                <?php foreach ($buildings as $building): ?>
                                    <option value="<?= $building['name']; ?>"><?= $building['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="area" class="form-label">Area</label>
                            <select name="area" id="area" class="form-select">
                                <option value="Select area" selected disabled>Select area</option>
                                <?php foreach ($areaCodes as $areaCode): ?>
                                    <option value="<?= $areaCode['name']; ?>"><?= $areaCode['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="item" class="form-label">Item</label>
                            <select name="item" id="item" class="form-select">
                                <option value="Select item" selected disabled>Select item</option>
                                <?php foreach ($items as $item): ?>
                                    <option value="<?= $item['name']; ?>"><?= $item['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive p-3 bg-light">
        <table class="table table-bordered table-hover table-sm table-striped nowrap" id="maintenanceTable">
            <thead>
                <tr>
                    <th>Building</th>
                    <th>Area</th>
                    <th>Item</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($maintenances as $maintenance): ?>
                    <tr>
                        <td><?= $maintenance['building']; ?></td>
                        <td><?= $maintenance['area']; ?></td>
                        <td><?= $maintenance['item']; ?></td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm"
                                data-bs-toggle="modal"
                                data-bs-target="#updateMaintenance"
                                onclick="openModal(<?= htmlspecialchars(json_encode($maintenance), ENT_QUOTES, 'UTF-8') ?>)">
                                Update
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- update modal -->
    <div class="modal fade" id="updateMaintenance" tabindex="-1" aria-labelledby="updateMaintenanceLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateMaintenanceLabel">Update maintenance</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="update_maintenance" action="<?= base_url('update_maintenance'); ?>" method="POST">
                        <input type="hidden" name="maintenance_id" id="maintenance_id">

                        <div class="mb-3">
                            <label for="building" class="form-label">Building</label>
                            <select name="edit_building" id="edit_building" class="form-select">
                                <option value="Select Building" selected disabled>Select Building</option>
                                <?php foreach ($buildings as $building): ?>
                                    <option value="<?= $building['name']; ?>"><?= $building['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="area" class="form-label">Area</label>
                            <select name="edit_area" id="edit_area" class="form-select">
                                <option value="Select area" selected disabled>Select area</option>
                                <?php foreach ($areaCodes as $areaCode): ?>
                                    <option value="<?= $areaCode['name']; ?>"><?= $areaCode['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="item" class="form-label">Item</label>
                            <select name="edit_item" id="edit_item" class="form-select">
                                <option value="Select item" selected disabled>Select item</option>
                                <?php foreach ($items as $item): ?>
                                    <option value="<?= $item['name']; ?>"><?= $item['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-success" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- update modal end -->

    <!-- building maintenance -->
    <div class="table-responsive maintenance-table" id="buildingsTable" style="display: none;">
        <!-- add button -->
        <button class="btn btn-link mb-1" data-bs-toggle="modal" data-bs-target="#add_modal">Add Building</button>

        <!-- add modal -->
        <div class="modal fade" id="add_modal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addModalLabel">Add Building</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('addBuilding'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="buildingName" class="form-label">Building Name</label>
                                <input type="text" name="buildingName" id="buildingName" class="form-control">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-success btn-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add modal end -->
        <table class="table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Building Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($buildings)): ?>
                    <?php foreach ($buildings as $building): ?>
                        <tr>
                            <td><?= esc($building['building_id']); ?></td>
                            <td><?= esc($building['name']); ?></td>
                            <td class="d-flex justify-content-evenly">
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= esc($building['building_id']); ?>" data-name="<?= esc($building['name']); ?>">
                                    Update
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-danger text-center">No data found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <!-- update modal -->
        
        <!-- update modal end -->
    </div>
    <!-- building maintenance end -->

    <!-- items maintenance -->
    <div class="table-responsive maintenance-table" id="itemsTable" style="display: none;">
        <!-- add button -->
        <button class="btn btn-link mb-1" data-bs-toggle="modal" data-bs-target="#item_modal">Add Item</button>

        <!-- add modal -->
        <div class="modal fade" id="item_modal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="itemModalLabel">Add Item</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('addItem'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="itemName" class="form-label">Item Name</label>
                                <input type="text" name="itemName" id="itemName" class="form-control">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-success btn-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add modal end -->

        <table class="table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Item Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?= esc($item['item_id']); ?></td>
                        <td><?= esc($item['name']); ?></td>
                        <td>
                            <button class="btn btn-info btn-sm">Update</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- items maintenance end -->

    <!-- users maintenance -->
    <div class="table-responsive maintenance-table" id="usersTable" style="display: none;">
        <!-- add button -->
        <button class="btn btn-link mb-1" data-bs-toggle="modal" data-bs-target="#users_modal">Add User</button>

        <!-- add modal -->
        <div class="modal fade" id="users_modal" tabindex="-1" aria-labelledby="usersModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="usersModalLabel">Add User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('createUser'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" name="company" id="company" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="employee_number" class="form-label">Employee Number</label>
                                <input type="text" name="employee_number" id="employee_number" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="middle_name" class="form-label">Middle Name</label>
                                <input type="text" name="middle_name" id="middle_name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-success btn-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add modal end -->

        <table class="table table-striped table-bordered table-sm nowrap">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Company</th>
                    <th>Employee Number</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['fcusername']); ?></td>
                        <td><?= esc($user['fcempcompany']); ?></td>
                        <td><?= esc($user['fcempnumber']); ?></td>
                        <td><?= esc($user['fcemplname']); ?></td>
                        <td><?= esc($user['fcempfname']); ?></td>
                        <td><?= esc($user['fcempmname']); ?></td>
                        <td><?= esc($user['fcEmailAddress']); ?></td>
                        <td>
                            <button class="btn btn-info btn-sm">
                                Update
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- users maintenance end -->

    <!-- area code maintenance -->
    <div class="table-responsive maintenance-table" id="areaCodeTable" style="display: none;">
        <!-- add button -->
        <button class="btn btn-link mb-1" data-bs-toggle="modal" data-bs-target="#area_code_modal">Add Area</button>

        <!-- add modal -->
        <div class="modal fade" id="area_code_modal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="itemModalLabel">Add Area Code</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('addAreaCode'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="areaCodeName" class="form-label">Area Code Name</label>
                                <input type="text" name="areaCodeName" id="areaCodeName" class="form-control">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-success btn-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add modal end -->

        <table class="table table-striped table-bordered table-sm nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Area Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($areaCodes as $areaCode): ?>
                    <tr>
                        <td><?= esc($areaCode['area_code_id']); ?></td>
                        <td><?= esc($areaCode['name']); ?></td>
                        <td>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#updateAreaModal" class="btn btn-info btn-sm open-update-modal" data-id="<?= esc($areaCode['area_code_id']); ?>" data-name="<?= esc($areaCode['name']); ?>">
                                Update
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- update modal -->
    <div class="modal fade" id="updateAreaModal" tabindex="-1" aria-labelledby="areaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="areaModalLabel">Update area name</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateAreaForm" method="POST">
                        <input type="hidden" name="area_id" id="areaId">

                        <div class="mb-3">
                            <label for="areaName" class="form-label">Area Name</label>
                            <input type="text" name="area_name" id="areaName" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success" id="submitUpdate">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- update modal end -->
    <!-- area code maintenance end -->

    <!-- findings maintenance -->
    <div class="table-responsive maintenance-table" id="findingsTable" style="display: none;">
        <!-- add button -->
        <button class="btn btn-link mb-1" data-bs-toggle="modal" data-bs-target="#findings_modal">Add Findings</button>

        <!-- add modal -->
        <div class="modal fade" id="findings_modal" tabindex="-1" aria-labelledby="findingsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="findingsModalLabel">Add Findings</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('addFinding'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="findingsName" class="form-label">Findings Name</label>
                                <input type="text" name="findingsName" id="findingsName" class="form-control">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-success btn-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add modal end -->

        <table class="table table-striped table-bordered table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Finding Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($findings as $finding): ?>
                    <tr>
                        <td><?= esc($finding['finding_id']); ?></td>
                        <td><?= esc($finding['finding_name']); ?></td>
                        <td>
                            <button class="btn btn-info btn-sm">Update</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- findings maintenance end -->

    <!-- priority level maintenance -->
    <div class="table-responsive maintenance-table" id="priorityLevelTable" style="display: none;">
        <!-- add button -->
        <button class="btn btn-link mb-1" data-bs-toggle="modal" data-bs-target="#priority_modal">Add Priority
            Level</button>

        <!-- add modal -->
        <div class="modal fade" id="priority_modal" tabindex="-1" aria-labelledby="priorityModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="priorityModalLabel">Add Priority Level</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('addPriorityLevel'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="priority" class="form-label">Priority Level</label>
                                <input type="text" name="priority_level" id="priority_level" class="form-control">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-success btn-sm">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- add modal end -->

        <table class="table table-striped table-bordered table-sm nowrap">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Priority Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($prioritys as $priority): ?>
                    <tr>
                        <td><?= esc($priority['priority_id']); ?></td>
                        <td><?= esc($priority['priority_level']); ?></td>
                        <td>
                            <button class="btn btn-info btn-sm">Update</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- priority level maintenance end -->


    <?php if (session()->getFlashdata('error')): ?>
        <script>
            alert("<?= session()->getFlashdata('error'); ?>");
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <script>
            alert("<?= session()->getFlashdata('success'); ?>");
        </script>
    <?php endif; ?>
</div>




<?= $this->endSection(); ?>

<?= $this->section('maintenance_js'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const maintenanceTypeSelect = document.getElementById('maintenanceType');
        const addMaintenanceButton = document.getElementById('addMaintenanceButton');
        const maintenanceTable = document.getElementById('maintenanceTable');
        const maintenanceTableWrapper = document.querySelector('#maintenanceTable_wrapper');

        // Initialize DataTable and store instance
        const dataTableInstance = new DataTable('#maintenanceTable');

        function toggleVisibility() {
            const selectedValue = maintenanceTypeSelect.value;

            if (selectedValue === "") {
                addMaintenanceButton.style.display = 'block';
                maintenanceTable.style.display = 'table';
                if (maintenanceTableWrapper) maintenanceTableWrapper.style.display = 'block'; // Show DataTables UI
            } else {
                addMaintenanceButton.style.display = 'none';
                maintenanceTable.style.display = 'none';
                if (maintenanceTableWrapper) maintenanceTableWrapper.style.display = 'none'; // Hide DataTables UI
            }
        }

        toggleVisibility(); // Call on page load
        maintenanceTypeSelect.addEventListener('change', toggleVisibility);

        // Table switching logic
        maintenanceTypeSelect.addEventListener('change', function() {
            document.querySelectorAll('.maintenance-table').forEach(table => {
                table.style.display = 'none';
                const wrapper = document.querySelector(`#${table.id}_wrapper`);
                if (wrapper) wrapper.style.display = 'none';
            });

            const selectedValue = this.value;
            if (selectedValue) {
                const targetTable = document.getElementById(selectedValue + 'Table');
                const targetWrapper = document.querySelector(`#${selectedValue}Table_wrapper`);
                if (targetTable) targetTable.style.display = 'table';
                if (targetWrapper) targetWrapper.style.display = 'block';
            }
        });
    });

    /* data table */
    new DataTable('#maintenanceTable');

    // ajax request for update function
    function openModal(data) {
        console.log(data);

        $("#edit_building").val(data.building);
        $("#edit_area").val(data.area);
        $("#edit_item").val(data.item);
        $("#maintenance_id").val(data.maintenance_id);

        /* show modal */
        $('#updateMaintenance').modal('show');

        /* handle the form submission */
        $('#updateMaintenanceForm').on('submit', function(e) {
            e.preventDefault();

            const updatedData = {
                maintenance_id: $('#maintenance_id').val(),
                building: $('#edit_building'),
                area: $('#edit_area').val(),
                item: $('#edit_item')
            };

            $.ajax({
                url: '<?= base_url('update_maintenance'); ?>',
                type: 'POST',
                data: updatedData,
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert('Update successful.');
                        $('#updateMaintenance').modal('hide');
                    } else {
                        alert('Update failed: ' + response.message);
                    }
                },

                error: function(xhr, status, error) {
                    console.error('Error updating data: ', error);
                    alert('An error occurred while updating the data!');
                }
            });
        });
    }

    /* update area */
    document.querySelectorAll('.open-update-modal').forEach(button => {
        button.addEventListener('click', function () {
            const areaId = this.getAttribute('data-id');
            const areaName = this.getAttribute('data-name');

            document.getElementById('areaId').value = areaId;
            document.getElementById('areaName').value = areaName;

            const form = document.getElementById('updateAreaForm');
            form.action = `<?= base_url('update_area') ?>/${areaId}`;
        });
    });

    // update building
    document.querySelectorAll('.update_building_modal').forEach(button => {
        button.addEventListener('click', function () {
            const buildingId = this.getAttribute('data-id');
            const buildingName = this.getAttribute('data-name');

            document.getElementById('buildingId').value = buildingId;
            document.getElementById('buildingName').value = buildingName;

            const form = document.getElementById('updateBuildingForm');
            form.action = `<?= base_url('update_building') ?>/${buildingId}`;
        });
    });
</script>

<?= $this->endSection(); ?>