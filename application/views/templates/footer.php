</div>
</div>
</div>

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?= base_url('assets/vendo/chart.js/Chart.min.js');?>"></script>
<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

<script>
    $(document).ready(function(){
        $('#dataTable').DataTable({
            "language": {
                "search": "cari",
                "lengthMenu": "Tampilkan_MENU_data",
                "info": "Menampilkan_START_sampai_END_dengan_TOTAL_data",
                "paginate":{
                    "previous": "Sebelumnya",
                    "next": "Berikutnya"
                }
            }
        });
    });
</script>
<script>
    var ctx= document.getElementById("chartDashboard");
    var chart= new Chart(ctx,{
        type: 'bar',
        data: {
            labels:['Buku'.'Anggota'],
            dataset:[{
                labels:'Jumlah Data',
                data:[
                <?=$tota_buku;?>,
                <?=$total_anggota;?>
                ],
                backgroundColor;[
                    '#4e73df',
                    '#1cc88a'                
                ]
            }]
        },
        option:{
            responsive: true,
            scales:{
                yAxes:[{
                    ticks:{
                        beginAtZero: true
                    }
                }]
            }
        }
    });