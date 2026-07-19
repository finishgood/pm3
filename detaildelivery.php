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

                                    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/handsontable@14.3.0/dist/handsontable.full.min.css"
  />

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
                            <div class="page-wrapper" x-data="inputExport()">
                                    

                                    
                                    
                                     <!-- Page body 2 start -->
                                    <div class="page-body button-page" x-show="dataShow">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Detail Delivery</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tanggal Closing</label>
                                                            <div class="col-sm-3">
                                                                    <input id="txt_tglFrom" x-model="tglFrom" type="date" class="form-control">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input id="txt_tglTo" x-model="tglTo" type="date" class="form-control">
                                                            </div>
                                                            
                                                            <div class="col-sm-2">
                                                                <button @click="getData()"  class="btn waves-effect waves-light btn-primary">
                                                                    <span class="icofont icofont-search"> Search</span>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        
                                                        
                                                        <div class="form-group row">

                                                            <div class="table-responsive"
                                                            >
                                                            <button id="btnExport" class="btn waves-effect waves-light btn-primary">
                                                                    <span class="icofont icofont-download"> Export</span>
                                                                </button>
                                                            <table id="detail_report" class="table table-hover">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th>No</th>
                                                                        <th>IML</th>
                                                                        <th>DN</th>
                                                                        <th>Nopol</th>
                                                                        <th>Nama Driver</th>
                                                                        <th>Ekspedisi</th>
                                                                        <th>Customer</th>
                                                                        <th>Status</th>
                                                                        <th>Total Nett</th>
                                                                        <th>Total Roll</th>
                                                                        <th>Waktu IML DCO</th>
                                                                        <th>Waktu Antri</th>
                                                                        <th>Operator Muat</th>
                                                                        <th>Operator Forklift</th>
                                                                        <th>Gate Number</th>
                                                                        <th>Waktu Muat</th>
                                                                        <th>Operator Selesai</th>
                                                                        <th>Waktu Selesai</th>
                                                                        <th>Operator GI</th>
                                                                        <th>Waktu GI</th>
                                                                        <th>Operator Batal</th>
                                                                        <th>Waktu Batal</th>
                                                                        <th>Roll Pallet</th>
                                                                        <th>Keterangan</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <template x-for="(delivery,index) in tableExport" >
                                                                        <tr>
                                                                            <th scope="row" x-text="index+1"></th>
                                                                            
                                                                            <td x-text="delivery.NoIML"></td>
                                                                            <td x-text="'\''+delivery.NoDN"></td>
                                                                            <td x-text="delivery.Nopol"></td>
                                                                            <td x-text="delivery.NamaSupir"></td>
                                                                            <td x-text="delivery.Ekspedisi"></td>
                                                                            <td x-text="delivery.Customer"></td>
                                                                            <td x-text="delivery.Status"></td>
                                                                            <td x-text="parseInt(delivery.TotalNett).toLocaleString('en-US')"></td>
                                                                            <td x-text="parseInt(delivery.TotalRoll).toLocaleString('en-US')"></td>
                                                                            <td x-text="formatTanggalIndonesia(delivery.WaktuIML)"></td>
                                                                            <td x-text="formatTanggalIndonesia(delivery.WaktuAntri)"></td>
                                                                            <td x-text="delivery.OperatorMuat"></td>
                                                                            <td x-text="delivery.OperatorForklift"></td>
                                                                            <td x-text="delivery.GateNumber"></td>
                                                                            <td x-text="formatTanggalIndonesia(delivery.WaktuMuat)"></td>
                                                                            <td x-text="delivery.OperatorSelesai"></td>
                                                                            <td x-text="formatTanggalIndonesia(delivery.WaktuSelesai)"></td>
                                                                            <td x-text="delivery.OperatorGI"></td>
                                                                            <td x-text="formatTanggalIndonesia(delivery.WaktuGI)"></td>
                                                                            <td x-text="delivery.OperatorBatal"></td>
                                                                            <td x-text="formatTanggalIndonesia(delivery.WaktuBatal)"></td>
                                                                            <td x-text="parseInt(delivery.QtyPallet)"></td>
                                                                            <td x-text="delivery.Keterangan"></td>
                                                                        </tr>
                                                                    </template>
                                                                </tbody>
                                                            </table>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    
    <script src="https://cdn.jsdelivr.net/npm/handsontable@14.3.0/dist/handsontable.full.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script type="text/javascript" src="assets/js/backend.js "></script>
    <script type="text/javascript" src="assets/js/functionIKK.js "></script>
    <script type="text/javascript" src="assets/js/auth.js "></script>
    <script type="module">
        import { addExport, readExportByDN, readExportByDate, readExport, updateExport, deleteExport, getStayingSummary, getMergedClosingByDate } from './assets/js/export.js';
        const modelExport = { addExport, readExportByDN, readExportByDate, readExport, updateExport, deleteExport, getStayingSummary, getMergedClosingByDate }
        window.modelExport = modelExport; // Attach object to global scope
    </script>
    <script>
        
        //document.getElementById("txt_tglFrom").value = hariIni()
        //document.getElementById("txt_tglTo").value = hariIni()
        function inputExport() {
            return {
                warehouse: "PM3",
                tglFrom: hariIni(),
                tglTo: hariIni(),
                dataShow: true,
                formShow: false,
                importShow: false,
                NoDN: 0,
                errors: {},
               
                clearForm(){
                    this.warehouse = "PM3"
                    this.tglFrom = hariIni()
                    this.tglTo = hariIni()
                },
                tableExport: [],
                enableSaveButton: true,
                selDetailValue: "true",
                async getData(){
                    Alpine.store('globVar').isLoading = true
                    
                    try{
                        
                        let url = serverHosting + "/deliveryIML/detail"
                        let postBody = { 
                                    "tglFrom": this.tglFrom,
                                    "tglTo": this.tglTo,
                                    "warehouse": this.warehouse
                                }
                        try {
                            const data = await (await fetch(url, { method: 'POST', 
                                headers: {'Content-Type': 'application/json'},
                                body: JSON.stringify(postBody)
                                })).json()
                            this.tableExport = data.data
                            this.dataShow = true
                        } catch(error) {
                            console.error("One of the promises failed:", error);
                            notify(error, 'danger');
                        }
                        //this.tableExport = await modelExport.readExport()
                        console.log(this.tableExport)
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
    
      
    </script>
     <script>
    document.getElementById("btnExport").addEventListener("click", function () {
                const table = document.getElementById("detail_report");
                const workbook = XLSX.utils.table_to_book(table, { sheet: "Data Stock" });
                XLSX.writeFile(workbook, "Detail staying time.xlsx");
                });
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