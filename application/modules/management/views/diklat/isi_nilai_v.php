
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <!-- begin:: Subheader -->
      <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title"><?php echo $title ?> <?php echo $dataDiklat->diklatNama ?></h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc"><?php echo $dataDiklat->diklatTanggalMulai.' s.d '.$dataDiklat->diklatTanggalSelesai ?></span>

              <!--   <a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                    Add New
                </a> -->

                <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                    <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                    <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                    </span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">

                    <a class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                        <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                        <i class="flaticon2-calendar-1"></i>
                    </a>

                    <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
                        <a class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000"/>
                                </g>
                            </svg>                        <!--<i class="flaticon2-plus"></i>-->
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Add anything or jump to:                                   
                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Order</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">Ticket</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                        <span class="kt-nav__link-text">Goal</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support Case</span>
                                        <span class="kt-nav__link-badge">
                                            <span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>                                    
                                    <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>
                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 

            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                        Datatable <?php echo $title ?> 
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-download"></i> Export   
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Choose an option</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-print"></i>
                                                <span class="kt-nav__link-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="<?php echo current_url() ?>/excel" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                <span class="kt-nav__link-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                <span class="kt-nav__link-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            &nbsp;
                            <button type="submit" class="btnSimpan btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Simpan Nilai
                            </button>
                        </div>  
                    </div>      </div>
                </div>

                <div class="kt-portlet__body table-responsive">
                    <!--begin: Datatable -->

                    <table id="table" class="table table-checkable">
                        <thead>
                            <tr>
                                <th>NIP / NIK</th>
                                <th>Nama</th>
                                <th>Peserta</th>
                                <th style="min-width: 70px; max-width: 70px; width: 70px;" class="text-center">Nilai</th>
                                <th>Status Nilai</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>  
            <?php echo form_close() ?>

        </div>
            <!-- end:: Content -->     
        </div>
    </div>         

    <script type="text/javascript">
        function setTitle(title, button)
        {
            $('.modalSimpan').html(button);
            $('.modalLabel').html(title);
        }

        $(document).ready(function() {

            var dataFull;

            oTable = $('#table').dataTable({
                processing: true,
                serverSide: true,
                scrollX: false,
                lengthMenu: [15, 30],
                order: [[1, "asc"]],
                'searching'   : true,
                pagingType: 'numbers',
                language:{
                    "search":"Pencarian : ",
                    "info":           "<b>Menampilkan _START_ sampai _END_ dari _TOTAL_ Data</b>",

                },
                ajax: {
                    'type' : 'GET',
                    'url' : '<?php echo current_url();?>',
                    'dataSrc': function(json)
                    {
                        return dataFull = json.data;
                    },
                },
                columnDefs: [{visible: false, target: 0}],
                columns: [
                {data: 'pesertaNik'},
                {data: 'pesertaNama'},
                {
                    data: null, searchable: false, orderable: false, render: function (data) {

                        var text = '';
                        var gd = (data.pesertaGelarDepan == null)?'':data.pesertaGelarDepan;
                        var gb = (data.pesertaGelarBelakang == null)?'':data.pesertaGelarBelakang;

                        var foto = (data.pesertaFoto == null)?'<?php echo base_url('assets/media/users/default.jpg') ?>':'<?php echo base_url('assets/upload/images') ?>/'+data.pesertaFoto;

                        text += `<div class="kt-user-card-v2">
                        <div class="kt-user-card-v2__pic">
                        <img src="`+foto+`" width="90px" height="90px" class="m-img-rounded kt-marginless" alt="photo">
                        </div>
                        <div class="kt-user-card-v2__details">
                        <span class="kt-user-card-v2__name">`+ gd +' '+data.pesertaNama+' '+gb +`</span>
                        <a href="#" class="kt-user-card-v2__email kt-link">`+data.pesertaNik+`</a>
                        </div>
                        </div>`;

                        return text;
                    }
                },
                {
                    data: null, searchable: false, orderable: false, render: function (data) {

                        var btnNilai =  `<div class="">
                        <div class='input-group'>
                        <input type='number' class="form-control" value="`+data.pendaftaranNilai+`" min="0" max="100" name="nilai[`+data.pesertaNik+`]" placeholder=""/>
                        </div>
                        </div> `;

                        return btnNilai;
                    }
                },
                {data: 'nilaiKeterangan'},
                ],
            });

            oTable.fnSetColumnVis(0,false,false);
            oTable.fnSetColumnVis(1,false,false);

            $(document).on('click', '.btnShowModal', function(event) {
                id = '';

                cleanError();
                $('#formData').trigger('reset');
            });

            $(document).on('submit', 'form', function(event) {
                event.preventDefault();

                var data = new FormData(this);

                $.ajax({
                    url: '<?php echo current_url() ?>/',
                    type: 'POST',
                    dataType: 'JSON',
                    cache: false,
                    processData : false,
                    contentType: false,
                    data: data,
                    beforeSend: function()
                    {
                        btnLoading('.btnSimpan');
                        cleanError();
                    },
                    complete: function()
                    {
                        btnNormal('.btnSimpan');
                    },
                    success: function(res)
                    {
                        if (!res.status) 
                        {
                            getError(res)
                        }
                        else
                        {
                            toastr[res.status](res.message);
                            oTable.api().ajax.reload();
                        }
                    }
                })

            });

            $(document).on('click', '.btnConfirmDelete', function(event) {
                event.preventDefault();

                $.ajax({
                    url: '<?php echo base_url('admin/diklat') ?>/deleteDataJadwal/'+id,
                    type: 'POST',
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        btnLoading('.btnConfirmDelete');
                    },
                    complete: function()
                    {
                        btnNormal('.btnConfirmDelete');
                    },
                    success: function(res)
                    {
                        id = '';

                        toastr[res.status](res.message);

                        $('#modal-delete').modal('hide');
                        oTable.api().ajax.reload();
                    }
                })
            });

            function getError(data)
            {
                $.each(data.error, function(index, el) 
                {
                    $('.'+index).html(el);
                }); 
            }

            function cleanError()
            {
                $('.cleanError').html('');
            }

            var btnText;
            function btnLoading(selector)
            {
                btnText = $(selector).html();
                $(selector).html('<i class="fa fa-spinner fa-spin"></i> Loading .....');
                $(selector).attr('disabled', 'true');
            }

            function btnNormal(selector)
            {
                $(selector).html(btnText);
                $(selector).removeAttr('disabled');
            }

            toastConfig();
            function toastConfig(){
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }

        });
    </script>