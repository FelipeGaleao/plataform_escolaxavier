<?php
$this->assign('title', 'Cursos');
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
                <th>Curso</th>
                <th>Descrição</th>
                <th>Escola</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($courses as $course){
                ?>
                <tr>
                    <td>
                        <div class="d-flex lh-sm py-1 align-items-center">
                            <div class="flex-fill">
                                <div class="strong"><?php echo $course->name;?></div>
                                <div class="text-muted text-h5"><a href="#" class="text-reset"><?php echo $course->address;?></a></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><?php echo $course->description;?></div>
                    </td>
                    <td>
                        <div><?php echo $course->school->name;?></div>
                    </td>
                    <td>
                        <a href="/cursos/editar/<?php echo $course->id;?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
