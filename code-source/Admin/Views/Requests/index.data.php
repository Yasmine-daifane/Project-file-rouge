<h1>
    <?php var_dump($IsAjaxRequest) ?>
</h1>
<?php
if (empty($pages)) {
?>
    <div class="alert alert-warning alert-dismissible">
        <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        No Service Found!
    </div>
<?php
} else {
?>
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 10%">
                    full Name
                </th>
                <th class="text-center" style="width: 20%">
                    email
                </th>
                <th class="text-center" style="width: 20%">
                    Description
                </th>
                <th style="width: 20%">
                    Date
                </th>
                <th style="width: 10%">
                    status
                </th>
                <th style="width: 20%">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $services  = $pages[$currentPage - 1];
            foreach ($services as $result) {
            ?>
                <tr>
                    <td>
                        <?= $result->GetFirst_name() ?>
                        <?= $result->GetLast_name() ?>
                    </td>
                    <td>
                        <?= $result->GetEmail() ?>
                    </td>
                    <td>
                        <?= $result->GetName() ?>
                    </td>
                    <td>
                        <?= $result->GetDate_demande() ?>
                    </td>
                    <td>
                        <p id="status" data-toggle="modal" data-target="#status_edit" data-id="<?= $result->GetID() ?>">
                            <?= $result->Getstatuse() ?>
                        </p>
                    </td>
                    <td class="client-actions">
                        <a class="btn btn-primary btn-sm" href="mailto:<?= $result->GetEmail() ?>?subject=Mail from 'InnovIT'&body=Some body text here">
                            Send Email <i class="fa fa-envelope"></i>
                        </a>
                    </td>

                </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>
    <div class="mt-3 d-flex justify-content-center align-items-center">
        <div class="dataTables_paginate paging_simple_numbers" id="paginate">
            <ul class="pagination">
                <?php
                if (isset($pagesNum)) {
                    for ($i = 0; $i < $pagesNum; $i++) {
                        if ($currentPage == $i + 1) {
                ?>
                            <li class="page-item active">
                                <a class="page-link" data-page="<?= $i + 1 ?>" href="#">
                                    <?= $i + 1 ?>
                                </a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="page-item ">
                                <a class="page-link" data-page="<?= $i + 1 ?>" href="#">
                                    <?= $i + 1 ?>
                                </a>
                            </li>
                <?php
                        }
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="status_edit" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit request status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="custom-select">
                        <option selected>Choice one</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Completed">Completed</option>
                        <option value="On Hold">On Hold</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script>
        $(document).on("click", "#status", function(e) {
            e.preventDefault()
            let id = $('#status').data
            console.log(id);
        })
        let status = document.getElementById('status')
        status.onclick = function(){
            console.log("he");
        }
    </script>