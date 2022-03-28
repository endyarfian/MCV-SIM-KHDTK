
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container sidebar-closed sbar-open" id="container">

<div class="overlay"></div>
<div class="cs-overlay"></div>
<div class="search-overlay"></div>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    
    <nav id="sidebar">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="<?= BASEURL; ?>/assets/img/logo white.png" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.php" class="nav-link "><img src="<?= BASEURL; ?>/assets/img/logo white2.png" class="navbar-logo"></a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="accordionExample">

            <!--  begin dashboard  -->
            <li class="menu">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                    <li>
                        <a href="<?= BASEURL2; ?>"> Analisis </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL2; ?>/laporan"> Ringkasan </a>
                    </li>
                </ul>
            </li>
            <!--  end dashboard  -->

            <!--  BEGIN apps  -->
            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg><span>APPS</span></div>
            </li>

            <li class="menu">
                <a href="<?= BASEURL2; ?>/webgis" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                    <span>Web GIS</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="<?= BASEURL2; ?>/notes" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span>Catatan</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="<?= BASEURL2; ?>/kalender" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Kalender</span>
                    </div>
                </a>
            </li>
            <!--  end apps  -->

            <!--  BEGIN penataan kawasan  -->
            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg><span>DATA INPUT</span></div>
            </li>

            <li class="menu active">
                <a href="#penataan" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        <span>Penataan kawasan</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="penataan" data-parent="#accordionExample">
                    <li class="active">
                        <a href="<?= BASEURL2; ?>/organisasi_kawasan"> Pengorganisasian Kawasan </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL2; ?>/struktur_umt"> Struktur Kawasan UMT  </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL2; ?>/tanaman_umt"> Jenis Tanaman pada UMT </a>
                    </li>                            
                </ul>
            </li>
            <!--  end penataan kawasan  -->

            <!--  BEGIN potensi sdh  -->
            <li class="menu">
                <a href="#potensi" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                        <span>Potensi SDH</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="potensi" data-parent="#accordionExample">
                    <li>
                        <a href="<?= BASEURL2; ?>/inven_sdh"> Inventarisasi SDH </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL2; ?>/ukur_pu"> Pengukuran dalam PU </a>
                    </li>
                </ul>
            </li>
            <!--  end potensi sdh  -->

            <!--  begin potensi sosekbud  -->
            <li class="menu">
                <a href="#sosekbud" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Potensi SOSEKBUD</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="sosekbud" data-parent="#accordionExample">
                    <li>
                        <a href="<?= BASEURL2; ?>/sosekbud_desa"> SOSEKBUD Desa </a>
                    </li>
                    <li>
                        <a href="<?= BASEURL2; ?>/hwd"> Kelola Kawasan HWD </a>
                    </li>
                </ul>
            </li>
            <!--  end potensi sosekbud  -->

            <!--  begin rencana realisasi  -->
            <li class="menu">
                <a href="<?= BASEURL2; ?>/rencanarealisasi" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        <span>Rencana & Realisasi</span>
                    </div>
                </a>
            </li>

            <!--  end rencana realisasi  -->

            <!--  begin profil  -->
            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg><span>AKUN</span></div>
            </li>

            <li class="menu">
                <a href="<?= BASEURL2; ?>/profil" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                     <span>Profil</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="<?= BASEURL2; ?>/pengaturan" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>                                
                    <span>Pengaturan</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                     <span>Logout</span>
                    </div>
                </a>
            </li>
            <!--  end profil  -->
            
        </ul>
        
    </nav>

</div>
<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row" id="cancel-row">
            <!-- begin tabel penataan kawasan -->
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="page-header">
                    
                        <div class="page-title breadcrumb-four">
                            <ul class="breadcrumb">
                                <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>
                                </li>
                                <li><a href="javscript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                Penataan Kawasan</a></li>
                                <li  class="active"><a href="javscript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg> 
                                Pengorganisasian Kawasan</a></li>
                            </ul>
                            <br>
                            <br>
                        <h3><b>Tabel Penataan Kawasan</b></h3>  
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table table-striped" style="width:100%">
                            <div class="col-lg-6 layout-top-spacing">
                            <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#penataankawasan" >
                                Input Data
                            </button> 
                            </div>
                        <thead>
                        <tr>
                            <th>Kode Penataan Kawasan</th>
                            <th>Nomor SK</th>
                            <th>Tanggal Berlaku</th>
                            <th>Acuan Kode Kegiatan Tahunan</th>
                            <th class="no-content">Aksi Lanjut</th>
                        </tr>
                        </thead>
                        <tbody>                            
                        <?php
                        //data tabel penataan kawasan
                        foreach ($data['penataankawasan'] as $penataankawasan) :
                        ?>
                        <tr>
                            <td><?=$penataankawasan['Kode Penataan Kawasan'];?></td>
                            <td><?=$penataankawasan['No SK'];?></td>
                            <td><?=$penataankawasan['Berlaku Sejak'];?></td>
                            <td><?=$penataankawasan['Kode Rencana Tahunan Kegiatan'];?></td>
                            <td>
                                <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapuspenataankawasan<?=$idpk;?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                </button>
                                </td>
                        </tr>
                                <!-- Modal delete penataan kawasan-->
                                <div class="modal fade" id="hapuspenataankawasan<?=$idpk;?>" tabindex="-1" role="dialog" aria-labelledby="hapuspenataankawasanlabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapuspenataankawasanlabel">Hapus Data Penataan Kawasan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert-light-primary border-0 mb-4">
                                                    <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                </div>
                                            <form class="form-vertical" method="post">
                                                <li class="list-group-item">Kode Penataan Kawasan = <?=$kodepk;?></li>
                                                <li class="list-group-item">Nomor SK = <?=$skpk;?></li>
                                                <li class="list-group-item">Tanggal Berlaku = <?=$tanggalskpk;?></li>
                                                <li class="list-group-item">Acuan Kode Kegiatan Tahunan = <?=$kodertkpk;?></li>
                                                <div class="form-group mb-4">
                                                    <input type="hidden" value = "<?=$idpk;?>" name="idpk" > 
                                                </div>
                                                    <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                    <button type="submit" name="hapuspk" class="btn btn-danger">Hapus</button>
                                                    </div>     
                                            </form>         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal delete penataan kawasan -->
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end tabel penataan kawasan -->
        <!-- begin tabel umt -->
        <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="page-header">
                    <div class="page-title">
                        <h3><b>Daftar Unit Manajemen Terkecil</b></h3>  
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config1" class="table table-striped" style="width:100%">
                            <div class="col-lg-6 layout-top-spacing">
                            <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#umt" >
                                Input Data
                            </button> 
                            </div>
                        <thead>
                        <tr>
                            <th>Kode Penataan Kawasan</th>
                            <th>Kode UMT</th>
                            <th>Tipe UMT</th>
                            <th>UMT</th>
                            <th>Tanggal Berlaku</th>
                            <th class="no-content">Aksi Lanjut</th>
                        </tr>
                        </thead>
                        <tbody>                            
                        <?php
                        //data tabel umt
                        foreach ($data['umt'] as $umt) :
                        ?>
                        <tr>
                            <td><?= $umt ['Kode Penataan Kawasan'];?></td>
                            <td><?= $umt ['Kode UMT'];?></td>
                            <td><?= $umt ['Tipe UMT'];?></td>
                            <td><?= $umt ['UMT']?></td>
                            <td><?= $umt ['Tanggal Berlaku'];?></td>
                            <td>
                                <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapusumt<?=$idumt;?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                </button>
                            </td>
                        </tr>
                                <!-- Modal delete tabel umt-->
                                <div class="modal fade" id="hapusumt<?=$idumt;?>" tabindex="-1" role="dialog" aria-labelledby="hapusumtlabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusumtlabel">Hapus Data UMT</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert-light-primary border-0 mb-4">
                                                    <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                </div>
                                            <form class="form-vertical" method="post">
                                                <li class="list-group-item">Kode Penataan Kawasan = <?= $dataumt ['Kode Penataan Kawasan'];?></li>
                                                <li class="list-group-item">Kode UMT = <?= $dataumt ['Kode UMT'];?></li>
                                                <li class="list-group-item">Tipe UMT = <?= $dataumt ['Tipe UMT'];?></li>
                                                <li class="list-group-item">UMT = <?= $dataumt ['UMT'];?></li>
                                                <li class="list-group-item">Tanggal Berlaku UMT = <?= $dataumt ['Tanggal Berlaku'];?></li>
                                                <div class="form-group mb-4">
                                                    <input type="hidden" value = "<?=$idumt;?>" name="idumt" > 
                                                </div>
                                                    <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                    <button type="submit" name="hapusumt" class="btn btn-danger">Hapus</button>
                                                    </div>     
                                            </form>         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal delete tabel umt -->
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end tabel umt -->
        <!-- begin zonasi -->
        <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="page-header">
                    <div class="page-title">
                        <h3><b>Daftar Zonasi Kawasan</b></h3>  
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config2" class="table table-striped" style="width:100%">
                            <div class="col-lg-6 layout-top-spacing">
                            <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#zonasi" >
                                Input Data
                            </button> 
                            </div>
                        <thead>
                        <tr>
                            <th>Kode Penataan Kawasan</th>
                            <th>Kode Zonasi</th>
                            <th>Zonasi</th>
                            <th>SK Pengesahan</th>
                            <th>Deskripsi</th>
                            <th>Arahan <i>Land Use</i></th>
                            <th class="no-content">Aksi Lanjut</th>
                        </tr>
                        </thead>
                        <tbody>                            
                        <?php
                        //data tabel zonasi
                        foreach ($data['zonasi'] as $zonasi) :
                        ?>
                        <tr>
                            <td><?= $zonasi ['Kode Penataan Kawasan'];?></td>
                            <td><?= $zonasi ['Kode Zonasi'];?></td>
                            <td><?= $zonasi ['Zonasi'];?></td>
                            <td><?= $zonasi ['SK Pengesahan'];?></td>
                            <td><?= $zonasi ['Deskripsi'];?></td>
                            <td><?= $zonasi ['Arahan Land Use'];?></td>
                            <td>
                                <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapuszonasi<?=$idzonasi;?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal delete tabel zonasi-->
                            <div class="modal fade" id="hapuszonasi<?=$idzonasi;?>" tabindex="-1" role="dialog" aria-labelledby="hapuszonasilabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapuszonasilabel">Hapus Data Zonasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert-light-primary border-0 mb-4">
                                                    <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                                </div>
                                            <form class="form-vertical" method="post">
                                                <li class="list-group-item">Kode Penataan Kawasan = <?= $kodepkzonasi;?></li>
                                                <li class="list-group-item">Kode Zonasi = <?= $kodezonasi;?></li>
                                                <li class="list-group-item">Zonasi = <?= $zonasi;?></li>
                                                <li class="list-group-item">SK Pengesahan = <?= $skzonasi;?></li>
                                                <li class="list-group-item">Deskripsi= <?= $deskripsizonasi;?></li>
                                                <li class="list-group-item">Land Use= <?= $landuse;?></li>
                                                <div class="form-group mb-4">
                                                    <input type="hidden" value = "<?=$idzonasi;?>" name="idzonasi" > 
                                                </div>
                                                    <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                    <button type="submit" name="hapuszonasi" class="btn btn-danger">Hapus</button>
                                                    </div>     
                                            </form>         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal delete tabel zonasi -->
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end zonasi -->
        <!-- begin LMU -->
        <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="page-header">
                    <div class="page-title">
                        <h3><b>Daftar <i>Land Management Units</i></b></h3>  
                    </div>
                </div>
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config3" class="table table-striped" style="width:100%">
                            <div class="col-lg-6 layout-top-spacing">
                            <button class="btn btn-outline-info mb-2 " data-toggle="modal" data-target="#lmu" >
                                Input Data
                            </button> 
                            </div>
                        <thead>
                        <tr>
                            <th>Kode Penataan Kawasan</th>
                            <th>Kode LMU</th>
                            <th>LMU</th>
                            <th>SK Pengesahan</th>
                            <th>Deskripsi</th>
                            <th><i>Altitude</i></th>
                            <th><i>Slope</i></th>
                            <th>Jenis Tanah</th>
                            <th>Penutupan Lahan</th>
                            <th class="no-content">Aksi Lanjut</th>
                        </tr>
                        </thead>
                        <tbody>                            
                        <?php
                        //data tabel lmu
                        foreach ($data['lmu'] as $lmu) :
                        ?>
                        <tr>
                            <td><?=$lmu ['Kode Penataan Kawasan'];?></td>
                            <td><?=$lmu ['Kode LMU'];?></td>
                            <td><?=$lmu ['LMU'];?></td>
                            <td><?=$lmu ['SK Pengesahan'];?></td>
                            <td><?=$lmu ['Deskripsi'];?></td>
                            <td><?=$lmu ['Altitude'];?></td>
                            <td><?=$lmu ['Slope'];?></td>
                            <td><?=$lmu ['Jenis Tanah'];?></td>
                            <td><?=$lmu ['Jenis Penutupan Lahan'];?></td>
                            <td>
                                <button type = "button" class="btn btn-light-danger mb-2 mr-2 rounded-circle" title="Hapus data" data-toggle = "modal" data-target = "#hapuslmu<?=$idlmu;?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                            </button>
                        </tr>
                        <!-- Modal delete tabel lmu-->
                        <div class="modal fade" id="hapuslmu<?=$idlmu;?>" tabindex="-1" role="dialog" aria-labelledby="hapuslmulabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapuslmulabel">Hapus Data LMU</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="alert-light-primary border-0 mb-4">
                                            <span class="badge outline-badge-danger"> <strong>Penting!</strong> Data dibawah ini akan dihapus.</span>
                                            </div>
                                            <form class="form-vertical" method="post">
                                            <ul class="list-group ">
                                                <li class="list-group-item">Kode Penataan Kawasan = <?=$datalmu ['Kode Penataan Kawasan'];?></li>
                                                <li class="list-group-item">Kode LMU = <?=$datalmu ['Kode LMU'];?></li>
                                                <li class="list-group-item">LMU = <?=$datalmu ['LMU'];?></li>
                                                <li class="list-group-item">SK Pengesahan = <?=$datalmu ['SK Pengesahan'];?></li>
                                                <li class="list-group-item">Deskripsi = <?=$datalmu ['Deskripsi'];?></li>
                                                <li class="list-group-item"><i>Altitude</i> = <?=$datalmu ['Altitude'];?></li>
                                                <li class="list-group-item"><i>Slope</i> = <?=$datalmu ['Slope'];?></li>
                                                <li class="list-group-item">Jenis Tanah = <?=$datalmu ['Jenis Tanah'];?></li>
                                                <li class="list-group-item">Penutupan Lahan = <?=$datalmu ['Jenis Penutupan Lahan'];?>
                                            </ul>
                                                <div class="form-group mb-4">
                                                    <input type="hidden" value = "<?=$idlmu;?>" name="idlmu" > 
                                                </div>
                                                    <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Batal</button>
                                                    <button type="submit" name="hapuslmu" class="btn btn-danger">Hapus</button>
                                                    </div>     
                                            </form>         
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end modal delete tabel lmu -->
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end tabel LMU -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2022, Rebuild & Reconstruct by<a target="#" href="https://designreset.com">endyarfian.</a></p>
            </div>
        </div>
        </div>
    </div>
</div>

<!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
