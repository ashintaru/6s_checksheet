<?= $this->extend('pages/main'); ?>

<?= $this->section('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">
            Home
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="<?= base_url('dashboard'); ?>" class="active">
                Dashboard
            </a>
        </li>
    </ol>
</nav>


<div class="cards p-5 shadow-lg">
    <div class="row">
        <div class="mb-2">
            <h1 class="fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M22 7h-9v2h9zm0 8h-9v2h9zM5.54 11L2 7.46l1.41-1.41l2.12 2.12l4.24-4.24l1.41 1.41zm0 8L2 15.46l1.41-1.41l2.12 2.12l4.24-4.24l1.41 1.41z" />
                </svg> All Records
            </h1>
        </div>
        <div class="col-4">
            <div class="card shadow-lg" style="background-color: #8ce99a;">
                <div class="card-body">
                    <h5 class="card-title">No. of Findings</h5>
                    <p class="card-text fs-6 fw-bold"><?= count($checklists) ?></p>
                </div>
                <div class="text-end p-2">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#viewFinding">
                        View
                    </button>
                </div>
            </div>
        </div>
        <!-- findings modal -->
        <div class="modal fade" id="viewFinding" tabindex="-1" aria-labelledby="viewFindingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="viewFindingModalLabel">No. of Findings</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive p-5 bg-light">
                            <table class="table table-striped table-hovered table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th style="background-color: #8ce99a;">Building</th>
                                        <th style="background-color: #8ce99a;">Area</th>
                                        <th style="background-color: #8ce99a;">Item</th>
                                        <th style="background-color: #8ce99a;">Status</th>
                                        <th style="background-color: #8ce99a;">Findings</th>
                                        <th style="background-color: #8ce99a;">Priority</th>
                                        <th style="background-color: #8ce99a;">DRI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($checklists as $checklist) : ?>
                                        <tr>
                                            <td><?= $checklist['building']; ?></td>
                                            <td><?= $checklist['area']; ?></td>
                                            <td><?= $checklist['item']; ?></td>
                                            <td><?= $checklist['status']; ?></td>
                                            <td><?= $checklist['findings']; ?></td>
                                            <td><?= $checklist['priority']; ?></td>
                                            <td><?= $checklist['dri']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- findings modal end -->

        <div class="col-4">
            <div class="card shadow-lg" style="background-color: #c0eb75;">
                <div class="card-body">
                    <h5 class="card-title">Open</h5>
                    <p class="card-text fs-6 fw-bold">21</p>
                </div>
                <div class="text-end p-2">
                    <a href="#" class="btn btn-dark text-decoration-none">
                        View
                    </a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow-lg" style="background-color: #ffe066;">
                <div class="card-body">
                    <h5 class="card-title">Closed</h5>
                    <p class="card-text fs-6 fw-bold">78</p>
                </div>
                <div class="text-end p-2">
                    <a href="#" class="btn btn-dark">
                        View
                    </a>
                </div>
            </div>
        </div>

        <hr class="mb-3">

        <div class="mb-2">
            <h1 class="fs-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2m0 18H4V8h16z" />
                </svg> Current Day Checking
            </h1>
        </div>

        <div class="building mb-2 w-25">
            <label for="buildingSelection" class="form-label">Select building</label>
            <select name="buildingSelection" id="buildingSelection" class="form-select">
                <option value="" selected disabled></option>
                <?php foreach ($buildings as $building) : ?>
                    <option value="<?= $building['name']; ?>"><?= $building['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="card" style="background-color: #e599f7;">
                    <div class="card-body">
                        <h5 class="card-title">Total Check</h5>
                        <p class="card-text">89</p>
                    </div>
                    <div class="text-end p-2">
                        <a href="#" class="btn btn-dark">
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="background-color: #b197fc;">
                    <div class="card-body">
                        <h5 class="card-title">Checked</h5>
                        <p class="card-text">67</p>
                    </div>
                    <div class="text-end p-2">
                        <a href="#" class="btn btn-dark">
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="background-color: #91a7ff;">
                    <div class="card-body">
                        <h5 class="card-title">Pending</h5>
                        <p class="card-text">32</p>
                    </div>
                    <div class="text-end p-2">
                        <a href="#" class="btn btn-dark">
                            View
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>