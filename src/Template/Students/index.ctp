<?php
$this->assign('title', 'Estudantes');
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
                <th>Estudante</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($students as $student){
                ?>
                <tr>
                    <td>
                        <div class="d-flex lh-sm py-1 align-items-center">
                            <div class="flex-fill">
                                <div class="strong"><?php echo $student->name;?></div>
                                <div class="text-muted text-h5"><a href="#" class="text-reset"><?php echo $this->Subjects->getNameOfSchoolbyId($student->school_id);?></a></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div><?php echo $student->email;?></div>
                    </td>
                    <td>
                        <a href="/estudantes/editar/<?php echo $student->id;?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
