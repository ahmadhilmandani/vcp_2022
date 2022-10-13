<section class="container-fluid">

    <button class="btn btn-primary d-inline-block d-md-none mt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
        <i class="bi bi-list text-white"></i>
    </button>

    <div class="row vh-100 bg-white-custom">

        <div class="offcanvas-start p-0 col-xl-2 col-md-3 border-1 border-end border-grey-light-custom" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">

            <section class="offcanvas-header">
                <button type="button" class="btn-close d-inline-block d-md-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </section>
            <!-- JANGAN LUPA KASIH PENGECAKAN SESSION YANG DI SET BERNILAI ADMIN ATAU USER -->
            <?= $sidebar_admin ?>

        </div>

        <div class="container-lg col-xl-10 col-md-9 d-sm-block mt-5 ps-md-5">
            <!-- JANGAN LUPA KASIH PENGECAKAN SESSION YANG DI SET BERNILAI ADMIN ATAU USER -->
            <?= $main_admin ?>

        </div>


</section>
<script src="<?= base_url("asset/js/sidebarToggle.js?v.2") ?>" ?></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tableVaksin').DataTable({
            responsive: true,
            processing: true,
        });
    });

    $('.nav-tab-link').on('click', function() {
        $('.nav-tab-link').removeClass('active text-primary border-bottom border-primary border-2')
        $(this).addClass('active text-primary border-bottom border-primary border-2 ')
        $('.nav-tab-link').addClass('text-muted')
        $(this).removeClass('text-muted')
    });
    $('.nav-statistik').on('click', function() {
        $('.nav-statistik').removeClass('active  text-primary border-bottom fw-bold')
        $(this).addClass('active  text-primary border-bottom fw-bold')
        $('.nav-statistik').addClass('text-muted')
        $(this).removeClass('text-muted')
    })
    
</script>
<!-- script chart js -->
<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Dewasa (31-55)', 'Remaja(18-30)', 'Anak(6-17)', 'Belum Vaksin'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5,],
            backgroundColor: [
                '#3392F4',
                '#6CCFE7',
                '#76ECF4',
                '#D1D1D1',
            ]
        }]
    },
    options: {
        
    }
});
</script>