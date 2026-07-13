<!DOCTYPE html>
<html lang="en">

<head>
    <title>Finish Good IKK</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Finished Goods IKK" />
    <meta name="keywords" content="Indah Kiat Pulp & Paper" />
    <meta name="author" content="FG Team Work" />
    <!-- Favicon icon -->
    
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/notification/notification.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css/css/animate.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

    <script type="module">
        import { getDashboard, readStayingByIML,updateSelesai, updateGI, updateProses,updateAmbilSJ} from './assets/js/staying.js';
        const modelStaying = { getDashboard, readStayingByIML, updateSelesai, updateGI, updateProses,updateAmbilSJ }
        window.modelStaying = modelStaying; // Attach object to global scope
    </script>
 
</head>

<body>
    <div class="container-loader" x-init x-show="$store.globVar.isLoading"  x-transition.duration.300ms>
    <div class="custom-loader"></div>
    </div>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <?php include "navbar.php"; ?>
    
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                <?php include "sidebar.php" ?>


                <div class="pcoded-content">
                    <!-- Page-header start -->
                    
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page body start -->
                                <div class="page-body button-page">
                                    
                                    <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card"
                                                    x-data="getDelivery()"
                                                    x-init="getData"
                                                    >
                                                    <div class="card-header">
                                                        <h5 x-text="$store.globVar.tableTitle"></h5>
                                                        
                                                    </div>

                                                    <!-- Table All -->


                                                    <div class="card-block table-border-style">
                                                        <button class="btn waves-effect waves-light btn-primary d-none" data-toggle="modal" data-target="#modalAction"><i class="icofont icofont-tag"></i>Lanjut</button>
                                                        <button class="btn waves-effect waves-light btn-secondary d-none" data-toggle="modal" data-target="#modalAction"><i class="icofont icofont-reply"></i>Return</button>
                                                        <button class="btn waves-effect waves-light btn-danger" data-toggle="modal" data-target="#modalAction">
                                                            <i class="icofont icofont-close"></i>Batal
                                                        </button>
                                                        <div class="table-responsive" 
                                                            >
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th>No</th>
                                                                        <th>&nbsp;</th>
                                                                        <th>IML</th>
                                                                        <th>Tujuan</th>
                                                                        <th>Nopol</th>
                                                                        <th>Nama Driver</th>
                                                                        <th x-show="((getParameter('status')=='dn' || getParameter('status')=='yesterday'))">Durasi</th>
                                                                        <th x-show="((getParameter('status')=='dn' || getParameter('status')=='yesterday'))">Waktu Proses</th>
                                                                        <th x-show="((getParameter('status')=='dn' || getParameter('status')=='yesterday'))">Waktu Selesai</th>
                                                                        <th x-show="((getParameter('status')=='dn' || getParameter('status')=='yesterday'))">Waktu DN</th>
                                                                        <th>Status</th>
                                                                        <th>Waktu Antri</th>
                                                                        <th>DN</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <template x-for="(delivery,index) in dataDelivery" >
                                                                        <tr>
                                                                            <th scope="row" x-text="index+1"></th>
                                                                            <td>
                                                                                <input type="radio" name="IML" x-bind:value="delivery.NoIML" x-model="selectedIML"">
                                                                            </td>
                                                                            <td x-text="delivery.NoIML"></td>
                                                                            <td x-text="delivery.Tujuan"></td>
                                                                            <td x-text="delivery.Nopol"></td>
                                                                            <td x-text="delivery.NamaSupir"></td>
                                                                            <td x-show="((getParameter('status')=='dn'||getParameter('status')=='yesterday'))" x-text="getHHMMDiff(delivery.WaktuAntri,delivery.WaktuDN)"></td>
                                                                            <td x-show="((getParameter('status')=='dn'||getParameter('status')=='yesterday'))" x-text="formatTanggalIndonesia(delivery.WaktuProses)"></td>
                                                                            <td x-show="((getParameter('status')=='dn'||getParameter('status')=='yesterday'))" x-text="formatTanggalIndonesia(delivery.WaktuSelesai)"></td>
                                                                            <td x-show="((getParameter('status')=='dn'||getParameter('status')=='yesterday'))" x-text="formatTanggalIndonesia(delivery.WaktuDN)"></td>
                                                                            <td x-text="delivery.Status"></td>
                                                                            <td x-text="formatTanggalIndonesia(delivery.WaktuAntri)"></td>
                                                                            <td x-text="delivery.NoDN"></td>
                                                                        </tr>
                                                                    </template>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <!-- End Table All -->

                                                    <div class="modal fade" id="modalAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" x-text="$store.globVar.tableTitle"></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Yakin ingin proses ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                                                                    
                                                                    <button type="button" class="btn btn-primary" @click="onYes">Yes</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    



                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main-body end -->
                
                <div id="styleSelector">
                
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- notification js -->
<script type="text/javascript" src="assets/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="assets/pages/notification/notification.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.15.0/cdn.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>

<script type="text/javascript" src="assets/js/firestore.js "></script>
<script type="text/javascript" src="assets/js/backend.js "></script>
<script type="text/javascript" src="assets/js/functionIKK.js "></script>
<script type="text/javascript" src="assets/js/auth.js "></script>
    
    <script>
        
        getParameter = (key) => {
            address = window.location.search
            parameterList = new URLSearchParams(address)
            return parameterList.get(key)
        }

        let getStatus = getParameter("status")
        let url = serverHosting + "/deliveryIML/list_status/PM3"
        if(getStatus){
            url=serverHosting + "/deliveryIML/list_status/PM3/"+getStatus
            if(getStatus=="yesterday"){
                url=serverHosting + "/deliveryIML/yesterday/PM3/dn"
            }
            Alpine.store('globVar').tableTitle = getStatus
        }

        function getDelivery(){
            return {
                dataDelivery:{},
                selectedIML:0,
                getData(){
                    console.log(0)
                    fetch(url, {
                        method: 'GET',
                        headers: { 
                                'Content-Type': 'application/json' 
                        },
                    })
                    .then((res) => {
                        console.log(res) 
                        return res.json()
                        
                    }) 
                    .then(data => {
                        const respon = data.data
                        /*
                        this.dataGI = respon.gi.filter(item => {
                            let tanggal = new Date(dateYMD(item.WaktuAntri)).getTime();
                            return tanggal >= new Date(dateYMD(hariIni())).getTime() &&
                            tanggal <= new Date(getTomorrow(1)).getTime() && 
                            item.Status === 'gi' })
                        this.dataBatal = respon.batal.filter(item => {
                            let tanggal = new Date(dateYMD(item.WaktuAntri)).getTime();
                            return tanggal >= new Date(dateYMD(hariIni())).getTime() &&
                            tanggal <= new Date(getTomorrow(1)).getTime() && 
                            item.Status === 'batal' })
                        */
                       this.dataDelivery = respon
                        console.log(respon);
                    })                    
                    .catch(error => {
                        console.error('Error:', error);
                        
                        
                        // Tangani error di sini
                    })
                    .finally(() => {
                        
                    });
                },
            }

        }
    </script>

    <script>
       function deleteConfirm(IML) {
            let userResponse = confirm("Yakin mau batal IML "+IML+" ?");
            if (userResponse) {
                alert("Action confirmed!");
            } else {
                alert("Action canceled!");
            }
        }
    </script>

  <script>
    document.addEventListener('alpine:init', () => {
            Alpine.store('globVar', {
                  isLoading: false,
                  isShow: false,
                  isAntri: false,
                  isProses: false,
                  isSelesai: false,
                  isYesterday: false,
                  isGI: false,
                  isBatal: false,
                  tableTitle: "",
                  toggleIsShow(){
                     this.isShow = !this.isShow
                  }
            });
         });

    document.addEventListener('alpine:initialized', () => {
    switch (getStatus) {
        case "antri":
            Alpine.store('globVar').tableTitle = "Antri Muat"
            break;
        case "proses":
            Alpine.store('globVar').tableTitle = "Proses Muat"
            break;
        case "selesai":
            Alpine.store('globVar').tableTitle = "Selesai Muat"
            break;
        case "dn":
            Alpine.store('globVar').tableTitle = "Surat Jalan"
            break;
        case "yesterday":
            Alpine.store('globVar').tableTitle = "Surat Jalan Yesterday"
            break;
        case "batal":
            Alpine.store('globVar').tableTitle = "Batal Muat"
            break;
        default:
            Alpine.store('globVar').tableTitle = "List Delivery"
        } 
    });

      

        
         
  </script>

  


</body>

</html>
