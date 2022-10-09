<script src="<?= base_url('asset/js/sweetalert2.all.min.js') ?>"></script>
<script src="cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    <?php if ($this->session->has_userdata('flash_icon')) : ?>
        Swal.fire({
            title: <?= json_encode($this->session->userdata('flash_title')); ?>,
            text: <?= json_encode($this->session->userdata('flash_text')); ?>,
            icon: <?= json_encode($this->session->userdata('flash_icon')); ?>,
            confirmButtonText: 'Baik!'
        })
    <?php $this->session->unset_userdata('flash_title'); ?>
    <?php $this->session->unset_userdata('flash_text'); ?>
    <?php $this->session->unset_userdata('flash_icon'); ?>
    <?php endif; ?>
</script>


</body>

</html>