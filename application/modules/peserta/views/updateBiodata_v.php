<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>

                Informasi Personal           </h3>

                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        <?php echo $subTitle ?>                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Subheader -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

            <!--Begin::App-->
            <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                <!--Begin:: App Aside Mobile Toggle-->
                <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                    <i class="la la-close"></i>
                </button>
                <!--End:: App Aside Mobile Toggle-->

                <!--Begin:: App Aside-->
                <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside" style="opacity: 1;">
                    <!--begin:: Widgets/Applications/User/Profile1-->
                    <div class="kt-portlet ">
                        <div class="kt-portlet__head  kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body kt-portlet__body--fit-y">
                            <!--begin::Widget -->
                            <div class="kt-widget kt-widget--user-profile-1">
                                <div class="kt-widget__head">
                                    <div class="kt-widget__media">
                                        <?php $foto = ($profile->pesertaFoto == null)?base_url('assets/media/users/default.jpg'):base_url('assets/upload/images/'.$profile->pesertaFoto) ?>
                                        <img src="<?php echo $foto ?>" alt="image">
                                    </div>
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">
                                                <span id="namaLengkap"><?php echo $profile->pesertaNama ?></span>
                                                <i class="flaticon2-correct kt-font-success"></i>                       
                                            </a>
                                            <span class="kt-widget__subtitle">
                                                <?php echo $profile->pesertaNik ?>
                                            </span>
                                        </div>


                                    </div>
                                </div>
                                <div class="kt-widget__body">
                                    <div class="kt-widget__content">
                                        <div class="kt-widget__info">
                                            <span class="kt-widget__label">Email:</span>
                                            <a href="#" class="kt-widget__data"><span id="emailAddress"><?php echo $profile->pesertaEmail ?></span></a>
                                        </div>
                                        <div class="kt-widget__info">
                                            <span class="kt-widget__label">Phone:</span>
                                            <a href="#" class="kt-widget__data">+62 <span id="phoneNumber"><?php echo $profile->pesertaNoHp ?></span></a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__items">
                                        <a href="<?php echo base_url('peserta/') ?>" class="kt-widget__item kt-widget__item--active">
                                            <span class="kt-widget__section">
                                                <span class="kt-widget__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                                                        </g>
                                                    </svg>                            </span>
                                                    <span class="kt-widget__desc">
                                                        Biodata                                                      
                                                    </span>
                                                </span>    
                                            </a>

                                            <a href="<?php echo base_url('peserta/ubah_password') ?>" class="kt-widget__item ">
                                                <span class="kt-widget__section">
                                                    <span class="kt-widget__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"></path>
                                                                <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"></path>
                                                                <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>                            </span>
                                                        <span class="kt-widget__desc">
                                                            Ubah Password                                            
                                                        </span>
                                                    </span> 
                                                </a>
                                                <a href="<?php echo base_url('peserta/setting_notifikasi') ?>" class="kt-widget__item ">
                                                    <span class="kt-widget__section">
                                                        <span class="kt-widget__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" id="Combined-Shape" fill="#000000"></path>
                                                                </g>
                                                            </svg>                            </span>
                                                            <span class="kt-widget__desc">
                                                                Setting Notifikasi                                                      
                                                            </span>
                                                        </span>    
                                                    </a>

                                                    <a href="<?php echo base_url('peserta/notifikasi') ?>" class="kt-widget__item">
                                                    <span class="kt-widget__section">
                                                        <span class="kt-widget__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                                                    <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" id="Combined-Shape" fill="#000000"></path>
                                                                </g>
                                                            </svg>                            </span>
                                                            <span class="kt-widget__desc">
                                                                Notifikasi                                                      
                                                            </span>
                                                        </span>    
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Widget -->
                                    </div>
                                </div>
                                <!--end:: Widgets/Applications/User/Profile1-->

                            </div>
                            <!--End:: App Aside-->

                            <!--Begin:: App Content-->
                            <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="kt-portlet">
                                            <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title"><?php echo $subTitle ?></h3>
                                                </div>
                                            </div>

                                            <?php echo form_open_multipart('', 'id="formData" class="kt-form kt-form--label-right"'); ?> 
                                                <div class="kt-portlet__body">
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-section__body">

                                                            <div class="form-group row">
                                                                <div class="col-lg-12 text-center">
                                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                                        <div class="kt-avatar__holder" id="pesertaFoto" style="background-image: url(&quot;<?php echo $foto ?>&quot;);"></div>
                                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Ubah Foto">
                                                                            <i class="fa fa-pen"></i>
                                                                            <input type="file" name="pesertaFoto" accept=".png, .jpg, .jpeg">
                                                                        </label>
                                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Batal">
                                                                            <i class="fa fa-times"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="cleanError pesertaFoto"></div>
                                                                </div>
                                                            </div> 

                                                            <div class="form-group row">
                                                                <div class="col-lg-3">
                                                                    <label>Gelar Depan</label>
                                                                    <input type="text" class="form-control" name="pesertaGelarDepan" value="<?php echo html_escape($profile->pesertaGelarDepan); ?>" placeholder="">
                                                                    <div class="cleanError pesertaGelarDepan"></div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label class="">Nama Lengkap <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control" name="pesertaNama" value="<?php echo html_escape($profile->pesertaNama); ?>" placeholder="">
                                                                    <div class="cleanError pesertaNama"></div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <label class="">Gelar Belakang</label>
                                                                    <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaGelarBelakang); ?>" name="pesertaGelarBelakang" placeholder="">
                                                                    <div class="cleanError pesertaGelarBelakang"></div>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <div class="col-lg-7">
                                                                    <label>Tempat lahir</label>
                                                                    <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaTempatLahir); ?>" name="pesertaTempatLahir" placeholder="">
                                                                    <div class="cleanError pesertaTempatLahir"></div>
                                                                </div>
                                                                <div class="col-lg-5">
                                                                    <label class="">Tanggal Lahir</label>
                                                                    <div class="input-group date">
                                                                        <input type="text" class="form-control datePicker" value="<?php echo html_escape($profile->pesertaTanggalLahir); ?>" readonly name="pesertaTanggalLahir" placeholder="">
                                                                        <!-- <input type="text" class="form-control" readonly="" value="05/20/html_escape(2017"); id="kt_datepicker_3"> -->
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">
                                                                                <i class="la la-calendar"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cleanError pesertaTanggalLahir"></div>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <div class="col-lg-4">
                                                                    <label>Jabatan <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaJabatan); ?>" name="pesertaJabatan" placeholder="">
                                                                    <div class="cleanError pesertaJabatan"></div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="">Instansi <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaInstansi); ?>" name="pesertaInstansi" placeholder="">
                                                                    <div class="cleanError pesertaInstansi"></div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="">Pangkat Golongan <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaPangkatGolongan); ?>" name="pesertaPangkatGolongan" placeholder="">
                                                                    <div class="cleanError pesertaPangkatGolongan"></div>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <div class="col-lg-6">
                                                                    <label>Alamat Rumah</label>
                                                                    <div class="kt-input-icon">
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaAlamat); ?>" name="pesertaAlamat" placeholder="">
                                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                                    </div>
                                                                    <div class="cleanError pesertaAlamat"></div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>Alamat Kantor</label>
                                                                    <div class="kt-input-icon">
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaAlamatKantor); ?>" name="pesertaAlamatKantor" placeholder="">
                                                                        <span class="kt-input-icon__icon kt-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
                                                                    </div>
                                                                    <div class="cleanError pesertaAlamatKantor"></div>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group row">
                                                                <div class="col-lg-6">
                                                                    <label>No Hp <span class="text-info text-sm"><small>ex : 85291860735</small></span></label>
                                                                    <div class="kt-input-icon kt-input-icon--left">
                                                                        <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaNoHp); ?>" name="pesertaNoHp" placeholder="">
                                                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                                            <span>+62</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="cleanError pesertaNoHp"></div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>Email</label>
                                                                    <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaEmail); ?>" name="pesertaEmail" placeholder="">
                                                                    <div class="cleanError pesertaEmail"></div>
                                                                </div>
                                                            </div>   
                                                            <div class="form-group row">
                                                                <div class="col-lg-6">
                                                                    <label>Agama <span class="text-danger">*</span></label>
                                                                    <?php echo form_dropdown('pesertaAgama', $selectAgama, $profile->pesertaAgama, ['class' => 'form-control kt-select2', 'style' => 'width: 100%']) ?>
                                                                    <div class="cleanError pesertaAgama"></div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label>Pendidikan Terakhir <span class="text-danger">*</span></label>
                                                                    <input type="text" class="form-control" value="<?php echo html_escape($profile->pesertaPendidikanTerakhir); ?>" name="pesertaPendidikanTerakhir" placeholder="">
                                                                    <div class="cleanError pesertaPendidikanTerakhir"></div>
                                                                </div>
                                                            </div>   

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xl-3">
                                                            </div>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <button type="submit" class=" btnSimpan btn btn-success">Submit</button>&nbsp;
                                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>  
                                </div>           
                            </div>
                            <!--End:: App Content-->
                        </div>
                        <!--End::App-->


                    </div>
                    <!-- end:: Content -->                      
                </div>


                <script type="text/javascript">

                    $(document).ready(function() {

                        var tanggal = '<?php echo $profile->pesertaTanggalLahir ?>';

                        $('.datePicker').val(moment(tanggal).locale('id').format('dddd, D MMMM YYYY'));

                        $('.datePicker').datepicker({
                            rtl: KTUtil.isRTL(),
                            todayHighlight: true,
                            orientation: "bottom left",
                        }).on('hide', function(e) {
                            $('.datePicker').val(moment(tanggal).locale('id').format('dddd, D MMMM YYYY'));
                        });;

                        $(document).on('change', '.datePicker', function(event) {
                            tanggal = $(this).val();

                            $('.datePicker').val(moment(tanggal).locale('id').format('dddd, D MMMM YYYY'));
                        });

                        $(document).on('keyup', 'input[name="pesertaEmail"]', function(event) {
                            text = $(this).val();

                            $('#emailAddress').text(text);
                        });

                         $(document).on('keyup', 'input[name="pesertaNoHp"]', function(event) {
                            text = $(this).val();

                            $('#phoneNumber').text(text);
                        });

                        $(document).on('keyup', 'input[name="pesertaNama"]', function(event) {
                            text = $(this).val();

                            $('#namaLengkap').text(text);
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