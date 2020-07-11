<?php
$this->assign('title', 'Escolas');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School[]|\Cake\Collection\CollectionInterface $schools
 */
?>
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
            <tr>
                <th>Escola</th>
                <th>Descrição</th>
                <th class="w-1"></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($schools as $school){
                ?>
            <tr>
                <td>
                    <div class="d-flex lh-sm py-1 align-items-center">
                        <div class="flex-fill">
                            <div class="strong"><?php echo $school->name;?></div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset"><?php echo $school->address;?></a></div>
                        </div>
                    </div>
                </td>
                <td>
                    <div><?php echo $school->description;?></div>
                </td>
                <td>
                    <a href="/escolas/editar/<?php echo $school->id;?>">Editar</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
