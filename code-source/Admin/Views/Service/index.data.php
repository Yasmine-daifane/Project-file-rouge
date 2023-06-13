<h1>
    <?php var_dump($IsAjaxRequest) ?>
</h1>
<?php
if (empty($pages)) {
?>
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        No Service Found!
    </div>
<?php
} else {
?>
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 2%">
                    #
                </th>
                <th style="width: 20%">
                    Name
                </th>
                <th class="text-center" style="width: 10%">
                    Price
                </th>
                <th class="text-center" style="width: 30%">
                    Description
                </th>
                <th style="width: 25%">
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
                        <?= $result->GetID() ?>
                    </td>
                    <td>
                        <a>
                            <?= $result->GetName() ?>
                        </a>
                    </td>
                    <td>
                        <?= $result->GetPrice() ?>
                    </td>
                    <td>
                        <?= $result->GetDescription() ?>
                    </td>
                    <td class="client-actions">
                        <a class="btn btn-primary btn-sm" href="../../Controller/client/index.php?Id_client=<?= $result->GetID() ?>">
                            <i class="fas fa-folder"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="editer.php?Id_Service=<?= $result->GetID() ?>">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="delete.php?Id_Service=<?=$result->GetID() ?>&id=<?= $id ?>">

                    
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
                                <a class="page-link service-page" data-department="<?= $id ?>" data-page="<?= $i + 1 ?>" href="#">
                                    <?= $i + 1 ?>
                                </a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="page-item ">
                                <a class="page-link service-page" data-department="<?= $id ?>" data-page="<?= $i + 1 ?>" href="#">
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