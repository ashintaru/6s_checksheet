<?= $this->extend('pages/main'); ?>

<?= $this->section('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">
            Pages
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="<?= base_url('checklist'); ?>" class="active">
                Checklist
            </a>
        </li>
    </ol>
</nav>

<div class="table-responsive p-5 bg-light shadow-lg rounded">
    <form action="<?= base_url('save_checklist'); ?>" method="POST" id="checklistForm">

        <input type="hidden" name="building_id" id="formBuildingId" value="">
        <input type="hidden" name="area_id" id="formAreaId" value="">

        <!-- display the selected item from dropdown -->
        <div class="d-flex align-items-center mb-2">
            <div class="selectedBuilding fw-bold me-3">
                <!-- display selected building  -->
                <span id="selectedBuildingText"></span>
            </div>
            <div class="selectedArea fw-bold">
                <!-- display selected area -->
                <span id="selectedAreaText"></span>
            </div>
        </div>

        <!-- building & area dropdown -->
        <div class="dropdown mb-1 d-flex gap-2">
            <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">Building</button>
            <ul class="dropdown-menu" id="buildingDropdown">
                <?php foreach ($buildings as $building): ?>
                    <li>
                        <a href="#" class="dropdown-item" id="building_id"
                            data-id="<?= $building['building_id'] ?>"><?= htmlspecialchars($building['name']); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <button type="button" class="btn btn-outline-warning btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">Area</button>
            <ul class="dropdown-menu" id="areaDropdown">
                <?php foreach ($areaCodes as $areaCode): ?>
                    <li>
                        <a href="#" class="dropdown-item" id="area_id"
                            data-id="<?= $areaCode['area_code_id'] ?>"><?= htmlspecialchars($areaCode['name']); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- building & area dropdown end -->

        <table class="table table-bordered table-striped table-hover table-sm nowrap" id="myTable">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Findings</th>
                    <th>Priority Level</th>
                    <th>DRI</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="checkListTableBody">
            </tbody>
        </table>
    </form>
</div>

<?= $this->endSection(); ?>



<?= $this->section('checklist_js'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const items = <?= json_encode($items) ?>;
        const findings = <?= json_encode($findings) ?>;
        const prioritys = <?= json_encode($prioritys) ?>;
        const checklist = <?= json_encode($checklist) ?>;

        function renderChecklistTable(data) {

            const tbody = document.getElementById('checkListTableBody');
            tbody.innerHTML = '';
            console.log("data");
            data.forEach(item => {
                const row = document.createElement('tr');

                row.innerHTML = `
                <td>
                    ${item.name}
                    <input type="hidden" name="items[${item.name}][name]" value="${item.name}">
                </td>
                <td>
                    <div class="radios d-flex align-items-center gap-3">
                        <div class="form-check">
                            <input type="radio" name="items[${item.item_id}][status]"
                                   id="good_${item.item_id}"
                                   class="form-check-input"
                                   value="OK">
                            <label for="good_${item.item_id}" class="form-check-label text-success fw-bold">OK</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="items[${item.item_id}][status]"
                                   id="notGood_${item.item_id}"
                                   class="form-check-input"
                                   value="NG">
                            <label for="notGood_${item.item_id}" class="form-check-label text-danger fw-bold">NG</label>
                        </div>
                    </div>
                </td>
                <td>
                    <select name="items[${item.item_id}][finding_id]"
                            id="finding_${item.item_id}"
                            class="form-select finding-select">
                        <option value="" selected disabled>Select Finding</option>
                        ${findings.map(finding => `
                            <option value="${finding.finding_id}">
                                ${finding.finding_name}
                            </option>
                        `).join('')}
                    </select>
                </td>
                <td>
                    <select name="items[${item.item_id}][priority_id]"
                            id="priority_${item.item_id}"
                            class="form-select priority-select">
                        <option value="" selected disabled>Select Priority Level</option>
                        ${prioritys.map(priority => `
                            <option value="${priority.priority_id}">
                                ${priority.priority_level}
                            </option>
                        `).join('')}
                    </select>
                </td>
                <td>
                    <input type="text"
                           name="items[${item.item_id}][dri]"
                           id="dri_${item.item_id}"
                           class="form-control dri-input">
                </td>
                <td class="d-flex justify-content-evenly">
                    <button type="submit"
                            class="btn btn-primary btn-sm save-row"
                            title="Save"
                            data-item-id="${item.item_id}">
                        Save
                    </button>
                </td>
            `;

                tbody.appendChild(row);

            });
        }

        // Initially render with what you have
        renderChecklistTable(items);

        let currentBuildingId = '';
        let currentAreaId = '';

        // Handle building selection
        document.querySelectorAll('#buildingDropdown .dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                console.log(this.textContent);
                console.log(checklist);
                let itemList = [];
                const check = checklist.filter((data) => data.building == this.textContent);
                check.forEach((data) => {

                    itemList.push(items.filter((item) => item.name == data.item));
                });
                console.log("==>", itemList);
                renderChecklistTable(itemList.flat());
                e.preventDefault();
                currentBuildingId = this.dataset.id;

                document.getElementById('selectedBuildingText').textContent = this.textContent;
            });
        });

        // Handle area selection
        document.querySelectorAll('#areaDropdown .dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                console.log(this.textContent);
                console.log(checklist);
                let itemList = [];
                const check = checklist.filter((data) => data.area == this.textContent); // Assuming 'area' is the property to filter by
                check.forEach((data) => {
                    itemList.push(items.filter((item) => item.name == data.item));
                });
                console.log("==>", itemList);
                renderChecklistTable(itemList.flat());
                e.preventDefault();
                currentAreaId = this.dataset.id;
                document.getElementById('selectedAreaText').textContent = this.textContent;
            });
        });

        // Handle save button clicks
        document.getElementById('checkListTableBody').addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('save-row')) {
                e.preventDefault();

                const button = e.target;
                const itemId = button.dataset.itemId;

                if (!currentBuildingId || !currentAreaId) {
                    alert('Please select both Building and Area first');
                    return;
                }

                // Get input values
                const status = document.querySelector(`input[name="items[${itemId}][status]"]:checked`)?.value;
                const findingId = document.querySelector(`select[name="items[${itemId}][finding_id]"]`)?.value;
                const priorityId = document.querySelector(`select[name="items[${itemId}][priority_id]"]`)?.value;
                const dri = document.querySelector(`input[name="items[${itemId}][dri]"]`)?.value;

                if (!status || !findingId || !priorityId || !dri) {
                    alert('Please fill all required fields');
                    return;
                }

                const formData = new FormData();
                formData.append('building_id', currentBuildingId);
                formData.append('area_id', currentAreaId);
                formData.append('item_id', itemId);
                formData.append('status', status);
                formData.append('finding_id', findingId);
                formData.append('priority_id', priorityId);
                formData.append('dri', dri);

                // Optional: Debug formData
                for (let pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }

                fetch('<?= base_url('save_checklist'); ?>', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            button.textContent = 'Saved';
                            button.classList.replace('btn-primary', 'btn-success');

                            setTimeout(() => {
                                button.textContent = 'Save';
                                button.classList.replace('btn-success', 'btn-primary');
                            }, 2000);
                        } else {
                            alert('Error: ' + data.message);
                            console.error(data.errors);
                        }
                    })
                    .catch(err => {
                        console.error('Fetch error:', err);
                        alert('Failed to send request.');
                    });
            }
        });
    });
</script>

<?= $this->endSection(); ?>