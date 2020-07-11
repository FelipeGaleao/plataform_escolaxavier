<script>
function fechar_diario(student_id, subject_id, course_id, average_final, enrollment_id){
    console.log("pega no meu breu");
    document.getElementById("fechar_diario_" + enrollment_id).className = 'btn btn-warning text-white';
    document.getElementById("fechar_diario_" + enrollment_id).innerText = 'Diário fechado';
    $.ajax({
        type: 'GET',
        url: 'http://localhost:8765/reports/add',
        data: {
            'student_id': student_id,
            'subject_id':  subject_id,
            'course_id': course_id,
            'average_final':  average_final,
        },
        success: function (msg) {
            document.getElementById("fechar_diario_" + enrollment_id).className = 'btn btn-warning text-white';
            document.getElementById("fechar_diario_" + enrollment_id).innerText = 'Diário fechado';
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Diário foi fechado com sucesso'
            })
        }
    });
}
</script>
