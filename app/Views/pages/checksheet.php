<?= $this->extend('pages/main'); ?>

<?= $this->section('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">
            Pages
        </li>
        <li class="breadcrumb-item" aria-current="page">
            <a href="<?= base_url('checksheet'); ?>" class="active">
                Checksheet Data
            </a>
        </li>
    </ol>
</nav>

<div class="table-responsive p-5 bg-light shadow-lg">
    <table class="table table-striped table-bordered table-hover table-sm nowrap" id="checksheetTable">
        <thead>
            <tr>
                <th>Check Date</th>
                <th>Building</th>
                <th>Area</th>
                <th>Total Check</th>
                <th>OK</th>
                <th>NG</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="checksheetTableBody"></tbody>
    </table>
</div>

<!-- data table -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.js"></script>

<script>
    /* data table */
    new DataTable('#checksheetTable');

    /* checksheet table */
    $(document).ready(function() {
        fetchChecksheetData();

        function fetchChecksheetData() {
            $.ajax({
                url: '<?= base_url('fetch_checksheet_data'); ?>',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#checksheetTableBody').empty();

                    $.each(data, function(index, item) {satisfies
                        $('#checksheetTableBody').append(
                            `<tr>
                                <td>${item.checkDate}</td>
                                <td>${item.building}</td>
                                <td>${item.area}</td>
                                <td>${item.totalCheck}</td>
                                <td>${item.ok}</td>
                                <td>${item.ng}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm">
                                        View
                                    </button>
                                </td>
                            </tr>`
                        );
                    });
                },

                error: function(xhr, status, error) {
                    console.error('Error fetching data: ', error);
                }
            });
        }
    });
</script>

<?= $this->endSection(); ?>