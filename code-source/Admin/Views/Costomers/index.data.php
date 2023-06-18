
<?php
if (empty($pages)) {
?>
    <div class="alert alert-warning alert-dismissible">
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        No Costumer!
    </div>
<?php
} else {
?>
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 20%">
                    full Name
                </th>
                <th class="text-center" style="width: 20%">
                    email
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
                   
                   
                    <td class="client-actions">
                        <a class="btn btn-primary btn-sm" href="mailto:<?= $result->GetEmail() ?>?subject=Mail from 'InnovIT'&body=Thank you for your registration !">
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