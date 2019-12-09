
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

      <!-- begin:: Subheader -->
      <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">

                <h3 class="kt-subheader__title"><?php echo $title ?></h3>

                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                <span class="kt-subheader__desc"><?php echo $this->session->user['nama'] ?></span>

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
    
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
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
                            <button onclick="setTitle('Tambah', 'Tambah')" data-toggle="modal" data-target="#modal-edit" class="btnShowModal btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Tambah Data
                            </button>
                        </div>  
                    </div>      </div>
                </div>

                <div class="kt-portlet__body table-responsive">
                    <!--begin: Datatable -->
                    <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="kt-portlet__body">
                                <div class="kt-portlet__body">
                                    <div class="form-group row">
                                        <div class="col-lg-6 text-center">
                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                <div class="kt-avatar__holder" id="pegawaiFoto" style="background-image: url(&quot;<?php echo base_url('assets/media/users/default.jpg') ?>&quot;);"></div>
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Ubah Foto">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" name="pegawaiFoto" accept=".png, .jpg, .jpeg">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                            <div class="cleanError pegawaiFoto"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <label>NIP <span class="text-danger">*</span></label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pegawaiUsername" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
                                            </div>
                                            <div class="cleanError pegawaiUsername"></div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label>Gelar Depan</label>
                                            <input type="text" class="form-control" name="pegawaiGelarDepan" placeholder="">
                                            <div class="cleanError pegawaiGelarDepan"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="">Nama Lengkap <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiNama" placeholder="">
                                            <div class="cleanError pegawaiNama"></div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="">Gelar Belakang</label>
                                            <input type="text" class="form-control" name="pegawaiGelarBelakang" placeholder="">
                                            <div class="cleanError pegawaiGelarBelakang"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-7">
                                            <label>Tempat lahir</label>
                                            <input type="text" class="form-control" name="pegawaiTempatLahir" placeholder="">
                                            <div class="cleanError pegawaiTempatLahir"></div>
                                        </div>
                                        <div class="col-lg-5">
                                            <label class="">Tanggal Lahir</label>
                                            <div class="input-group date">
                                                <input type="text" class="form-control datePicker" readonly name="pegawaiTanggalLahir" placeholder="">
                                                <!-- <input type="text" class="form-control" readonly="" value="05/20/2017" id="kt_datepicker_3"> -->
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="cleanError pegawaiTanggalLahir"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Jabatan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiJabatan" placeholder="">
                                            <div class="cleanError pegawaiJabatan"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Instansi <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiInstansi" placeholder="">
                                            <div class="cleanError pegawaiInstansi"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Pangkat Golongan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiPangkatGolongan" placeholder="">
                                            <div class="cleanError pegawaiPangkatGolongan"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Alamat Rumah</label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pegawaiAlamat" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                            </div>
                                            <div class="cleanError pegawaiAlamat"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Alamat Kantor</label>
                                            <div class="kt-input-icon">
                                                <input type="text" class="form-control" name="pegawaiAlamatKantor" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                            </div>
                                            <div class="cleanError pegawaiAlamatKantor"></div>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>No Hp <span class="text-info text-sm"><small>ex : 85291860735</small></span></label>
                                            <div class="kt-input-icon kt-input-icon--left">
                                                <input type="text" class="form-control" name="pegawaiNoHp" placeholder="">
                                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                    <span>+62</span>
                                                </span>
                                            </div>
                                            <div class="cleanError pegawaiNoHp"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="pegawaiEmail" placeholder="">
                                            <div class="cleanError pegawaiEmail"></div>
                                        </div>
                                    </div>   
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Agama <span class="text-danger">*</span></label>
                                            <?php echo form_dropdown('pegawaiAgama', $selectAgama, '', ['class' => 'form-control kt-select2', 'style' => 'width: 100%']) ?>
                                            <div class="cleanError pegawaiAgama"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Pendidikan Terakhir <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="pegawaiPendidikanTerakhir" placeholder="">
                                            <div class="cleanError pegawaiPendidikanTerakhir"></div>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>

                    </div>  
                    <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btnSimpan"><span class="modalSimpan"></span></button>
                </form>
                <!--end: Datatable -->
            </div>
        </div>  </div>
    </div>
</div>         


<!--begin::Modal-->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><span class="modalLabel"></span> Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btnSimpan"><span class="modalSimpan"></span></button>
            </div>
        </form>
    </div>
</div>
</div>
<!--end::Modal-->

<!--begin::Modal-->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin menghapus data?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body modalDeleteBody">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger btnConfirmDelete">Delete</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

<script type="text/javascript">
  $(document).ready(function() {

    $(document).on('submit', '#formPassword', function(event) {
        event.preventDefault();

        var data = new FormData(this);

        $.ajax({
            url: '<?php echo current_url() ?>',
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            processData : false,
            contentType: false,
            data: data,
            beforeSend: function()
            {
                btnLoading('#btnChangePassword');
                cleanError();
            },
            complete: function()
            {
                btnNormal('#btnChangePassword');
            },
            success: function(res)
            {
                if (res.status == 'validate') 
                {
                    getError(res)
                }
                else
                {
                    toastr[res.status](res.message);

                }
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