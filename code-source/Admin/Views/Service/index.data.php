<?php
if (empty($service)) {
?>
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        No Clientss Found!
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
                    Service Name
                </th>
                <th class="text-center" style="width: 50%">
                   price
                </th>
                <th class="text-center" style="width: 50%">
                   Description
                </th>

                <th style="width: 20%">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
          
            foreach ($service as $result) {
            ?>
                <tr>
                    <td>
                        <?= $result->GetID() ?>
                    </td>
                    <td>
                        <a>
                            <?= $result->GetName ?>
                        </a>
                    </td>
                    <td>
                        <?= $result->Getp ?>
                    </td>
                    <td class="client-actions">
                        <a class="btn btn-primary btn-sm" href="../../Controller/client/index.php?Id_client=<?= $result->GetID() ?>">
                            <i class="fas fa-folder"></i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="editer.php?Id_department=<?= $result->GetID() ?>">
                            <i class="fas fa-pencil-alt"></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="delete.php?Id_department=<?= $result->GetID() ?>">
                            <i class="fas fa-trash"></i>
                            delete
                        </a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>
