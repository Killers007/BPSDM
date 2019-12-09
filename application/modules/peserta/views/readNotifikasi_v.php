<div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>

                Notifikasi           </h3>

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
                                                <?php echo $profile->pesertaNama ?>
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
                                            <a href="#" class="kt-widget__data"><?php echo $profile->pesertaEmail ?></a>
                                        </div>
                                        <div class="kt-widget__info">
                                            <span class="kt-widget__label">Phone:</span>
                                            <a href="#" class="kt-widget__data">+62 <?php echo $profile->pesertaNoHp ?></a>
                                        </div>
                                    </div>
                                    <div class="kt-widget__items">
                                        <a href="<?php echo base_url('peserta/') ?>" class="kt-widget__item">
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

                                            <a href="<?php echo base_url('peserta/ubah_password') ?>" class="kt-widget__item">
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
                                                <a href="<?php echo base_url('peserta/setting_notifikasi') ?>" class="kt-widget__item">
                                                    <span class="kt-widget__section">
                                                        <span class="kt-widget__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect id="bound" x="0" y="0" width="24" height="24"/>
                                                                    <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"/>
                                                                </g>
                                                            </svg>                            </span>
                                                            <span class="kt-widget__desc">
                                                                Setting Notifikasi                                                      
                                                            </span>
                                                        </span>    
                                                    </a>

                                                    <a href="<?php echo base_url('peserta/notifikasi') ?>" class="kt-widget__item  kt-widget__item--active">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect id="bound" x="0" y="0" width="24" height="24"/>
                                                                        <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" id="Combined-Shape" fill="#000000"/>
                                                                        <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"/>
                                                                    </g>
                                                                </svg>                              </span>
                                                                <span class="kt-widget__desc">
                                                                    Pesan                                                      
                                                                </span>
                                                            </span>    
                                                        </a>

                                                        <a href="<?php echo base_url('peserta/email') ?>" class="kt-widget__item  kt-widget__item">
                                                            <span class="kt-widget__section">
                                                                <span class="kt-widget__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-nav__link-icon">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                                            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                                                            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" id="Combined-Shape" fill="#000000"></path>
                                                                        </g>
                                                                    </svg>                            </span>
                                                                    <span class="kt-widget__desc">
                                                                        Email                                                      
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

                                    <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
                                        <div class="kt-chat">
                                            <div class="kt-portlet kt-portlet--head-lg kt-portlet--last">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-chat__head ">
                                                        <div class="kt-chat__left">
                                                            <!--begin:: Aside Mobile Toggle -->
                                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop" id="kt_chat_aside_mobile_toggle">
                                                                <i class="flaticon2-open-text-book"></i>
                                                            </button>
                                                            <!--end:: Aside Mobile Toggle-->

                                                          
                                                        </div>

                                                        <div class="kt-chat__center">
                                                            <div class="kt-chat__label">
                                                                <a href="#" class="kt-chat__title">PANITIA</a>
                                                                <span class="kt-chat__status">
                                                                    <!-- <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active -->
                                                                </span>
                                                            </div>

                                                            <div class="kt-chat__pic kt-hidden">
                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Jason Muller">                              
                                                                    <img src="<?php echo base_url('assets/media/users/300_12.jpg') ?>" alt="image">               
                                                                </span>

                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Nick Bold">                              
                                                                    <img src="<?php echo base_url('assets/media/users/300_11.jpg') ?>" alt="image">               
                                                                </span>
                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Milano Esco">                              
                                                                    <img src="<?php echo base_url('assets/media/users/100_14.jpg') ?>" alt="image">               
                                                                </span>
                                                                <span class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Teresa Fox">                              
                                                                    <img src="<?php echo base_url('assets/media/users/100_4.jpg') ?>" alt="image">               
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="kt-chat__right">
                                                          
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="kt-portlet__body">
                                                    <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200">
                                                        <div class="kt-chat__messages bodyMessage">
                                                             <?php foreach ($notifikasiData as $key => $value): ?>

                                                                <?php $fotoPegawai = ($value->pegawaiFoto == null)?base_url('assets/media/users/default.jpg'):base_url('assets/upload/images/'.$value->pegawaiFoto) ?>

                                                                <?php if ($value->notifFrom == $this->session->user['user']): ?>
                                                                    <div class="kt-chat__message kt-chat__message--right">
                                                                        <div class="kt-chat__user">
                                                                            <span class="kt-chat__datetime"><?php echo '<br>'.timeAgo(date('Y-m-d H:i:s', strtotime($value->notifSend))) ?></span>
                                                                            <a href="#" class="kt-chat__username">You</a>
                                                                            <span class="kt-media kt-media--circle kt-media--sm"> 
                                                                                <img src="<?php echo $foto; ?>" alt="image">   
                                                                            </span>
                                                                        </div>
                                                                        <div class="kt-chat__text kt-bg-light-brand">
                                                                             <?php echo $value->notifContent ?>
                                                                        </div>
                                                                    </div>
                                                                <?php else: ?>
                                                                    
                                                                    <div class="kt-chat__message">
                                                                        <div class="kt-chat__user">
                                                                            <span class="kt-media kt-media--circle kt-media--sm"> 
                                                                                <img src="<?php echo $fotoPegawai; ?>" alt="image">   
                                                                            </span>
                                                                            <a href="#" class="kt-chat__username"><?php echo ($value->pegawaiNama == NULL)?'Administrator':$value->pegawaiNama ?></a>
                                                                            <span class="kt-chat__datetime"><?php echo '<br>'.timeAgo(date('Y-m-d H:i:s', strtotime($value->notifSend))) ?></span>
                                                                        </div>
                                                                        <div class="kt-chat__text kt-bg-light-success">
                                                                            <?php echo $value->notifContent ?>
                                                                        </div>
                                                                    </div>
                                                                <?php endif ?>

                                                               <?php endforeach ?>
                                                            
                                                            
                                                        </div>
                                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 504px; right: -2px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 259px;"></div></div></div>
                                                    </div>

                                                    <div class="kt-portlet__foot">
                                                        <div class="kt-chat__input">
                                                            <div class="kt-chat__editor">
                                                                <textarea style="height: 50px" id="textContent" placeholder="Type here..."></textarea>
                                                            </div>
                                                            <div class="kt-chat__toolbar">
                                                                <div class="kt_chat__tools">
                                                                    <a href="#"><i class="flaticon2-link"></i></a>
                                                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                                                </div>
                                                                <div class="kt_chat__actions">
                                                                    <button type="button" class="btnSend btn btn-brand btn-md btn-upper btn-bold kt-chat__reply">reply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                               </div>
                               <!--End::App-->


                           </div>
                           <!-- end:: Content -->                      
                       </div>

                       <script type="text/javascript">

                        $(document).ready(function() {

                            $(document).on('click', '.btnSend', function(event) {
                                event.preventDefault();

                                var content = $('#textContent').val();
                                
                                $.ajax({
                                   url: '<?php echo current_url() ?>/',
                                    type: 'POST',
                                    dataType: 'JSON',
                                    data: {'content': content},
                                    beforeSend: function()
                                    {
                                        btnLoading('.btnSend');
                                    },
                                    complete: function()
                                    {
                                        btnNormal('.btnSend');
                                    },
                                    success: function(res)
                                    {
                                        $('.bodyMessage').append( template(content) )
                                        toastr[res.status](res.message);
                                        $('#textContent').val('');
                                    }
                                })
                                
                            });


                            function template(content)
                            {
                                return `<div class="kt-chat__message kt-chat__message--right">
                                            <div class="kt-chat__user">
                                                <span class="kt-chat__datetime">Just Now</span>
                                                <a href="#" class="kt-chat__username">You</a>
                                                <span class="kt-media kt-media--circle kt-media--sm"> 
                                                    <img src="<?php echo $foto; ?>" alt="image">   
                                                </span>
                                            </div>
                                            <div class="kt-chat__text kt-bg-light-brand">
                                                `+content+`
                                            </div>
                                        </div>`
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