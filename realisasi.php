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
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js"></script>
    <script type="module">
        import { getDashboard, addStaying, readStayingByIML, updateSelesai, updateGI, updateProses, updateAmbilSJ } from './assets/js/staying.js';
        const modelStaying = { getDashboard, addStaying, readStayingByIML, updateSelesai, updateGI, updateProses, updateAmbilSJ }
        window.modelStaying = modelStaying; // Attach object to global scope

         import { getMergedClosingByDate } from './assets/js/export.js';
        const modelExport = {  getMergedClosingByDate }
        window.modelExport = modelExport; // Attach object to global scope


        
        import { getYesterday, getTomorrow, hariIni} from './assets/js/helperIKK.js';
        const waktuHelper = { getTomorrow, getYesterday, hariIni }
        window.waktuHelper = waktuHelper; // Attach object to global scope
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
                                    <div class="row"
                                    x-data="realisasiView()"
                                    x-init="getData"
                                    >
                                        
                                        <div class="col-xl-12 col-xs-6">
                                            <div class="card">
                                                
                                                <div class="card-header bg-primary">
                                                    <div class="row align-items-center">
                                                        <div class="col-9">
                                                            <h4 class="text-white m-b-0">Realisasi PM3</h4>
                                                        </div>
                                                        
                                                        <div class="col-3 text-right">
                                                            <i class="fa fa-barcode text-white f-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="card-block">
                                                    
                                                    <div class="row align-items-center table-responsive">
                                                        <table class="table table-hover table-border-style text-center align-middle table-bordered w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center align-middle"><h5>Day Shift</h5></th>
                                                                    <th class="text-center align-middle"><h5>Local</h5></th>
                                                                    <th class="text-center align-middle"><h5>Export</h5></th>
                                                                    <th class="text-center align-middle"><h5>Total</h5></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th class=" align-middle"><h5>Shift 1</h5>
                                                                    </th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.satu__local).toFixed(2).toLocaleString('en-US')">&nbsp;</h5></th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.satu__export).toFixed(2).toLocaleString('en-US')">&nbsp;</h5></th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.satu)">&nbsp;</h5></th>
                                                                </tr>
                                                                <tr>
                                                                    <th class=" align-middle"><h5>Shift 2</h5>
                                                                    </th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.dua__local).toFixed(2).toLocaleString('en-US')">&nbsp;</h5></th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.dua__export).toFixed(2).toLocaleString('en-US')">&nbsp;</h5></th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.dua)">&nbsp;</h5></th>
                                                                </tr>
                                                                <tr>
                                                                    <th class=" align-middle"><h5>Shift 3</h5>
                                                                    </th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.tiga__local).toFixed(2).toLocaleString('en-US')">&nbsp;</h5></th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.tiga__export).toFixed(2).toLocaleString('en-US')">&nbsp;</h5></th>
                                                                    <th class="text-center align-middle"> <h5 x-text="cekExistNett(dataRealisasi.data.today.tiga)">&nbsp;</h5></th>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <th colspan="3"></th>
                                                                    <th class="text-center align-middle"><h5 x-text="cekExistNett(dataRealisasi.data.today.satu)+cekExistNett(dataRealisasi.data.today.dua)+cekExistNett(dataRealisasi.data.today.tiga)"></h5></th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <button  @click="updateData()" data-toggle="modal" data-target="#modalScanBarcode" class="btn bg-c-purple text-white mt-1 mb-1">Update Data</button>
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
 <script>
    function realisasiView() {
            return {
                dataRealisasi : {
                    shift1Local: 0,
                    shift2Local: 0,
                    shift3Local: 0,
                    shift1Total: 0,
                    Shift2Total: 0,
                    shift3Total: 0,
                    shift1Export: 0,
                    shift2Export: 0,
                    shift3Export: 0
                },
                tableExport: [],
                dataIML:{},
                txtSetFocus: false,
                actionTitle: "",
                actionButton: "",
                destination:"",
                action: "",
                txtBarcode:"",
                txtHP:"",
                result: '',
                html5QrCode: null,

                
                async getData(){
                    let url = serverHosting+"/deliveryIML/realisasi/PM3"
                    Alpine.store('globVar').isLoading = true
                    
                    try{
                        const data = await (await fetch(url, { method: 'GET', 
                            headers: {'Content-Type': 'application/json'} })).json()
                        this.dataRealisasi = data
                        console.log(this.dataRealisasi)
                    }catch(err){
                        console.log(err)
                        notify(err,"danger")
                    }finally{
                        Alpine.store('globVar').isLoading = false
                    }
                        
                },

                async updateData(){
                    let url = serverHosting+"/deliveryIML/updatedataiml"
                    Alpine.store('globVar').isLoading = true
                    
                    try{
                        const data = await (await fetch(url, { method: 'GET', 
                            headers: {'Content-Type': 'application/json'} })).json()
                        if(data){
                            const refreshData = await this.getData()
                        }
                    }catch(err){
                        console.log(err)
                        notify(err,"danger")
                    }finally{
                        Alpine.store('globVar').isLoading = false
                    }
                        
                }
            }
        }
 </script>  
 <script>
        
$(document).ready(function(){
    $("#modalScanBarcode").on('shown.bs.modal', function(){
        $(this).find('input[type="number"]').focus();
    });
});
</script>


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
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- notification js -->
<script type="text/javascript" src="assets/js/bootstrap-growl.min.js"></script>
<script type="text/javascript" src="assets/pages/notification/notification.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>

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
         document.addEventListener('alpine:init', () => {
            Alpine.store('globVar', {
                  isLoading: false,
                  isShow: false,
                  toggleIsShow(){
                     this.isShow = !this.isShow
                  }
            });
         });
    </script>

</body>

</html>
