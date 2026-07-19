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
                            <div class="page-wrapper" x-data="showForklift()" x-init="$refs.txt_noIML.focus()">
                                    

                                    
                                    
                                     <!-- Page body 2 start -->
                                    <div class="page-body button-page">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="text-center"><div x-text="warehouse"></div> Forklift Menu</h3>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label-lg text-center">No IML</label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12 text-center">
                                                                    <input id="txt_noIML" 
                                                                    x-model="noIML" 
                                                                    x-ref="txt_noIML" 
                                                                    @keydown.enter.prevent="getIMLData();$refs.txt_noForklift.focus()"
                                                                    type="number" class="form-control-lg form-control-info form-control-center">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label-lg text-center">Nomor Forklift</label>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12 text-center">
                                                                    <input id="txt_noForklift" 
                                                                    x-model="noForklift" 
                                                                    x-ref="txt_noForklift" 
                                                                    @keydown.enter.prevent="executeAction()"
                                                                    type="text" class="form-control-lg form-control-info form-control-center">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12 text-center">
                                                                <h5 x-text="namaDriver"></h5><br />
                                                                <h5 x-text="nopol"></h5><br />
                                                                <h5 x-text="jenisKendaraan"></h5><br />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12 text-center" x-show="btnShow">
                                                                <button class="btn waves-effect waves-light btn-lg btn-out-dashed" :class="btnClass" @click="executeAction()">
                                                                    <span class="icofont icofont-save" x-text=btnText></span>
                                                                </button>
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

    <script type="text/javascript" src="assets/js/backend.js "></script>
    <script type="text/javascript" src="assets/js/functionIKK.js "></script>
    <script type="text/javascript" src="assets/js/auth.js "></script>
    <script type="module">
        
    </script>
    <script>
        
        //document.getElementById("txt_tglFrom").value = hariIni()
        //document.getElementById("txt_tglTo").value = hariIni()
        function showForklift() {
            return {
                warehouse: "PM3",
                noIML: "",
                noForklift: "",
                errors: {},
                imlData: {},
                btnText:"Proses",
                btnClass:"",
                action:"proses",
                btnShow:false,
                detailIMLShow:false,
                namaDriver:"",
                nopol:"",
                jenisKendaraan:"",
                clearForm(){
                    this.warehouse = "PM3"
                    this.noIML = ""
                    this.action = "proses"
                    this.btnText = "Proses"
                    this.btnClass = "Class"
                    this.noForklift = ""
                    this.detailIMLShow = false
                    this.btnShow = false 
                    this.namaDriver = ""
                    this.nopol = ""
                    this.jenisKendaraan = ""
                },
                async getIMLData() {
                    let url = serverHosting+"/deliveryIML/status/"+this.noIML
                    
                    Alpine.store('globVar').isLoading = true
                    try{
                            const data = await (await fetch(url, { method: 'GET', 
                            headers: {'Content-Type': 'application/json'}
                             })).json()
                             console.log(data)
                            if(data.success == true){
                                if(data.data.status == "dn" || data.data.status == "selesai"){
                                    throw new Error("IML Sudah selesai")
                                }
                                //notify("Pendaftaran Berhasil IML "+data.data.NoIML,"success")
                                this.imlData = data.data
                                this.btnText = ((data.data.Status=="antri")||(data.data.Status=="batal"))?"Proses":(data.data.Status=="proses")?"Selesai":""
                                this.btnClass = ((data.data.Status=="antri")||(data.data.Status=="batal"))?"btn-primary":(data.data.Status=="proses")?"btn-success":""
                                this.action = ((data.data.Status=="antri")||(data.data.Status=="batal"))?"proses":(data.data.Status=="proses")?"selesai":""
                                this.namaDriver = data.data.NamaSupir
                                this.nopol = data.data.Nopol
                                this.jenisKendaraan = data.data.JenisKendaraan
                                
                                this.btnShow = true

                               
                                //this.clearForm()
                            } else {
                                notify(data.messages,"danger")
                            }
                        }catch(err){
                            console.log(err)
                            //this.clearForm()
                            notify(err,"danger")
                        } finally {
                            Alpine.store('globVar').isLoading = false
                        }
                },
                async executeAction(){
                    let url = serverHosting+"/deliveryIML/"+this.action
                    Alpine.store('globVar').isLoading = true
                    try{
                            const data = await (await fetch(url, { method: 'POST', 
                            headers: {'Content-Type': 'application/json'},
                            body: JSON.stringify({ 
                                NoIML: parseInt(this.noIML), 
                                Operator: getUserObject().data.FullName,
                                OperatorForklift: this.noForklift,
                                Warehouse: "PM3",
                                WAMessages: true  }) })).json()
                            if(data.success == true){
                                notify("Update IML "+this.noIML,"success")
                                this.clearForm()
                                this.$refs.txt_noIML.focus()
                            } else {
                                notify(data.messages,"danger")
                            }
                        }catch(err){
                            console.log(err)
                            notify(err,"danger")
                        } finally {
                            
                            Alpine.store('globVar').isLoading = false
                        }
                        
                        
                }
            }
        }
    </script>
    
    <script>
    
      
    </script>
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