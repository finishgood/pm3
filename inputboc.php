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
                                <!-- Page body start -->
                                <div class="page-body button-page" x-show="formShow">
                                    <div class="row">
                                        <!-- bootstrap modal start -->
                                        <div class="col-sm-12">
                                            <!-- Notification card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Input Delivery Export</h5>
                                                </div>
                                                <div class="card-block">
                                                     <form @submit.prevent="">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tanggal BOC</label>
                                                            <div class="col-sm-3">
                                                                <input id="txt_tglBOC" type="date" class="form-control" x-model="dataForm.tglBOC" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">Tanggal Closing</label>
                                                            <div class="col-sm-3">
                                                                <input id="txt_tglClosing" type="date" class="form-control" x-model="dataForm.tglClosing" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row pt-2">
                                                            <label class="col-sm-2 col-form-label">No SC</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" x-model="dataForm.noSC" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">No DN</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" x-bind:disabled="!enableSaveButton" class="form-control" x-model="dataForm.noDN" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">Qty (MT)</label>
                                                            <div class="col-sm-2">
                                                                <input type="number" class="form-control" x-model="dataForm.qty" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row pt-2">
                                                            <label class="col-sm-2 col-form-label">EMKL</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" x-model="dataForm.EMKL" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">Shipping Line</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" x-model="dataForm.shippingLine" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">Destintation</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" class="form-control" x-model="dataForm.destination" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row pt-2">
                                                            <label class="col-sm-2 col-form-label">20feet</label>
                                                            <div class="col-sm-2">
                                                                <input type="number" class="form-control" x-model="dataForm.feet20" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">40feet</label>
                                                            <div class="col-sm-2">
                                                                <input type="number" class="form-control" x-model="dataForm.feet40" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">HC</label>
                                                            <div class="col-sm-2">
                                                                <input type="number" class="form-control" x-model="dataForm.HC" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row pt-2">
                                                            <label class="col-sm-2 col-form-label">Keterangan</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" x-model="dataForm.keterangan"></textarea>
                                                                <input type="hidden" class="form-control" x-model="dataForm.id" required>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group row">
                                                        <div class="col-md-3" x-show="enableSaveButton">
                                                            <button type="button" @click="submitForm()" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                                                <span class="icofont icofont-save"> Simpan</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="col-sm-3" x-show="!enableSaveButton">
                                                            <button type="button" @click="updateForm()" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                                                <span class="icofont icofont-save"> Update</span>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-3" x-show="formShow">
                                                            <button type="button" @click="clearForm()" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                                                <span class="icofont icofont-exit"> Cancel</span>
                                                            </button>
                                                        </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- Notification card end -->
                                        </div>
                                        <!-- Bootstrap modal end -->
                                    </div>

                                    
                                    
                                     <!-- Page body 2 start -->
                                    <div class="page-body button-page" x-show="dataShow">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Data Delivery Export</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                <button @click="dataShow = false;formShow = true" class="btn waves-effect waves-light btn-primary">
                                                                    <span class="icofont icofont-plus"> Input</span>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button @click="dataShow = false;importShow = true" class="btn waves-effect waves-light btn-primary">
                                                                    <span class="icofont icofont-upload"> Import</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
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
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th>No</th>
                                                                        <th>No SC</th>
                                                                        <th>No DN</th>
                                                                        <th>Plan</th>
                                                                        <th>EMKL</th>
                                                                        <th>Shipping Lines</th>
                                                                        <th>Destination</th>
                                                                        <th>Plan (Qty)</th>
                                                                        <th>Tanggal BOC</th>
                                                                        <th>Tanggal Closing</th>
                                                                        <th>Keterangan</th>
                                                                        <th>&nbsp;</th>
                                                                        <th>&nbsp;</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <template x-for="(exportData,index) in tableExport" >
                                                                        <tr>
                                                                            <th scope="row" x-text="index+1"></th>
                                                                            <td x-text="exportData.NoSC"></td>
                                                                            <td x-text="exportData.NoDN"></td>
                                                                            <td x-text="exportData.HC+exportData.Feet20+exportData.Feet40"></td>
                                                                            <td x-text="exportData.EMKL"></td>
                                                                            <td x-text="exportData.ShippingLine"></td>
                                                                            <td x-text="exportData.Destination"></td>
                                                                            <td x-text="exportData.Qty"></td>
                                                                            <td x-text="indoDate(exportData.TglBOC)"></td>
                                                                            <td x-text="indoDate(exportData.TglClosing)"></td>
                                                                            <td x-text="exportData.Keterangan"></td>
                                                                            <td>
                                                                                <span class="icofont icofont-pencil" @click="updateItem(index)"></span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="icofont icofont-trash" @click="deleteItem(index)"></span>
                                                                            </td>
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

                                    <div class="page-body button-page" x-show="importShow">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Import Data BOC</h5>
                                                    </div>
                                                    <div class="card-block" x-init="initTable()">
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Tanggal BOC</label>
                                                            <div class="col-sm-3">
                                                                <input id="txt_tglBOC" type="date" class="form-control" x-model="dataForm.tglBOC" required>
                                                            </div>
                                                            <label class="col-sm-2 col-form-label">Warehouse</label>
                                                            <div class="col-sm-3">
                                                                <input id="txt_warehouse" type="text" class="form-control" x-model="dataForm.warehouse" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div id="hot" style=" width: 100%;"></div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">
                                                                <button type="button" @click="simpanData()" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                                                    <span class="icofont icofont-save"> Simpan</span>
                                                                </button>
                                                            </div>
                                                            
                                                            <div class="col-sm-3">
                                                                <button type="button" @click="clearImport()" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                                                    <span class="icofont icofont-exit"> Cancel</span>
                                                                </button>
                                                            </div>
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
        import { addExport, readExportByDN, readExportByDate, readExport, updateExport, deleteExport, getStayingSummary, getMergedClosingByDate } from './assets/js/export.js';
        const modelExport = { addExport, readExportByDN, readExportByDate, readExport, updateExport, deleteExport, getStayingSummary, getMergedClosingByDate }
        window.modelExport = modelExport; // Attach object to global scope
    </script>
    <script>
        
        //document.getElementById("txt_tglFrom").value = hariIni()
        //document.getElementById("txt_tglTo").value = hariIni()
        function inputExport() {
            return {
                dataForm: {
                    id: "",
                    tglBOC: hariIni(),
                    noSC:"",
                    noDN: "",
                    EMKL:"",
                    shippingLine:"",
                    destination:"",
                    feet20: 0,
                    feet40: 0,
                    HC: 0,
                    qty: "",
                    tglClosing: "",
                    timeClosing:"",
                    finished:0,
                    warehouse: "PM3",
                    keterangan: ""
                },
                tglFrom: hariIni(),
                tglTo: hariIni(),
                dataShow: true,
                formShow: false,
                importShow: false,
                errors: {},
                validate() {
                    this.errors = {};
                    if (!this.dataForm.tglBOC || !this.dataForm.tglClosing) {
                        this.errors.message = 'Tanggal is required.'
                        console.log(this.errors.message)
                    }
                    if (!this.dataForm.noDN) {
                        this.errors.message = 'Nomor DN is required'
                    }
                    
                    return Object.keys(this.errors).length === 0
                },
                clearForm(){
                    this.dataForm.noSC =  ""
                    this.dataForm.noDN =  ""
                    this.dataForm.EMKL = ""
                    this.dataForm.shippingLine = ""
                    this.dataForm.destination = ""
                    this.dataForm.feet20 = 0
                    this.dataForm.feet40 = 0
                    this.dataForm.HC = 0
                    this.dataForm.qty = ""
                    this.dataForm.keterangan = ""
                    this.dataForm.id = ""
                    this.dataForm.tglBOC = hariIni()
                    this.dataForm.tglClosing = ""
                    this.dataForm.timeClosing = ""
                    this.dataForm.finished = 0
                    this.dataForm.warehouse = "PM3"
                    this.enableSaveButton = true
                    this.formShow = false
                    this.dataShow = true
                },
                async submitForm(){
                    if(!this.validate()){
                            notify(this.errors.message, "danger");
                            throw new Error(this.errors.message)
                    }
                    
                    try{
                            Alpine.store('globVar').isLoading = true
                            const submitDataForm = {}
                            submitDataForm.TglBOC = this.dataForm.tglBOC
                            submitDataForm.TglClosing = this.dataForm.tglClosing
                            submitDataForm.Keterangan = this.dataForm.keterangan
                            submitDataForm.NoDN = this.dataForm.noDN
                            submitDataForm.NoSC = this.dataForm.noSC
                            submitDataForm.Qty = this.dataForm.qty
                            submitDataForm.EMKL = this.dataForm.EMKL
                            submitDataForm.ShippingLine = this.dataForm.shippingLine
                            submitDataForm.Destination = this.dataForm.destination
                            submitDataForm.Feet20 = this.dataForm.feet20
                            submitDataForm.Feet40 = this.dataForm.feet40 
                            submitDataForm.HC = this.dataForm.HC
                            submitDataForm.Warehouse = this.dataForm.warehouse
                            
                            console.log(submitDataForm)
                            
                            let url = serverHosting + "/boc/insert"
                            const data = await (await fetch(url, { method: 'POST', 
                                headers: {'Content-Type': 'application/json'},
                                body: JSON.stringify({data: submitDataForm})
                                })).json()
                            //this.tableExport = data
                            
                            console.log(data)
                            this.clearForm()
                            this.getData()
                            this.formShow = false
                            this.dataShow = true
                            
                        } catch (error){
                            notify(error, 'danger');
                            console.log(error)
                        } finally {
                            Alpine.store('globVar').isLoading = false
                        }      
                            
                        
                },
                async updateForm(){
                    if(!this.validate()){
                            notify(this.errors.message, "danger");
                            throw new Error(this.errors.message)
                    }
                    
                    try{
                            Alpine.store('globVar').isLoading = true
                            const submitDataForm = {}
                            submitDataForm.TglBOC = this.dataForm.tglBOC
                            submitDataForm.TglClosing = this.dataForm.tglClosing
                            submitDataForm.Keterangan = this.dataForm.keterangan
                            submitDataForm.NoDN = this.dataForm.noDN
                            submitDataForm.NoSC = this.dataForm.noSC
                            submitDataForm.Qty = this.dataForm.qty
                            submitDataForm.EMKL = this.dataForm.EMKL
                            submitDataForm.ShippingLine = this.dataForm.shippingLine
                            submitDataForm.Destination = this.dataForm.destination
                            submitDataForm.Feet20 = this.dataForm.feet20
                            submitDataForm.Feet40 = this.dataForm.feet40 
                            submitDataForm.HC = this.dataForm.HC
                            submitDataForm.Warehouse = this.dataForm.warehouse
                            submitDataForm.id = this.dataForm.id
                            console.log(submitDataForm)
                            let url = serverHosting + "/boc/update"
                            const data = await (await fetch(url, { method: 'POST', 
                                headers: {'Content-Type': 'application/json'},
                                body: JSON.stringify({data: submitDataForm})
                                })).json()
                            //this.tableExport = data
                            
                            
                            console.log(data)
                            this.clearForm()
                            this.getData()
                            this.formShow = false
                            this.dataShow = true

                        } catch (error){
                            notify(error, 'danger');
                            console.log(error)
                        } finally {
                            Alpine.store('globVar').isLoading = false
                        }      
                            
                        
                },
                async deleteItem(index){
                    const table = this.tableExport[index]
                    if(confirm(`Yakin ingin menghapus no DN ${table.NoDN}?`)){
                        //const answer = await modelExport.deleteExport(data.id)
                        try{
                            Alpine.store('globVar').isLoading = true
                            const submitDataForm = {}
                            submitDataForm.id = table.id
                            console.log(submitDataForm)
                            let url = serverHosting + "/boc/remove"
                            const data = await (await fetch(url, { method: 'POST', 
                                headers: {'Content-Type': 'application/json'},
                                body: JSON.stringify({data: submitDataForm})
                                })).json()
                            //this.tableExport = data
                            console.log(data)
                            this.clearForm()
                            this.getData()
                            this.formShow = false
                            this.dataShow = true

                        } catch (error){
                            notify(error, 'danger');
                            console.log(error)
                        } finally {
                            Alpine.store('globVar').isLoading = false
                        }     
                    } else {
                        console.log("no")
                    }
                },
                dateFrom: "",
                dateTo: "",
                tableExport: [],
                enableSaveButton: true,
                selDetailValue: "true",
                async getData(){
                    Alpine.store('globVar').isLoading = true
                    //this.dateFrom = new Date(document.getElementById("txt_tglFrom").value)
                    //this.dateTo = addOneDayToDate(new Date(document.getElementById("txt_tglTo").value))
                    
                    try{
                        //this.tableExport = await modelExport.readExportByDate(this.dateFrom,this.dateTo)
                        //this.tableExport = await modelExport.getMergedClosingByDate(this.dateFrom,addOneDayToDate(new Date(this.dateTo)))
                        let url = serverHosting + "/boc/plan_date"
                        let postBody = { 
                                    "tglFrom": this.tglFrom,
                                    "tglTo": this.tglTo,
                                    "warehouse": this.dataForm.warehouse
                                }
                        try {
                            const data = await (await fetch(url, { method: 'POST', 
                                headers: {'Content-Type': 'application/json'},
                                body: JSON.stringify(postBody)
                                })).json()
                            this.tableExport = data.data
                            this.dataShow = true
                            this.importShow = false
                            console.log(postBody)
                            console.log(data)
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
                        
                },
                async updateItem(index){
                    
                    this.formShow = true
                    this.dataShow = false
                    this.dataForm.tglBOC = dateYMD(this.tableExport[index].TglBOC)
                    this.dataForm.tglClosing = dateYMD(this.tableExport[index].TglClosing)
                    this.dataForm.keterangan = this.tableExport[index].Keterangan
                    this.dataForm.noDN = this.tableExport[index].NoDN
                    this.dataForm.noSC = this.tableExport[index].NoSC
                    this.dataForm.qty = this.tableExport[index].Qty
                    this.dataForm.EMKL = this.tableExport[index].EMKL
                    this.dataForm.shippingLine = this.tableExport[index].ShippingLine
                    this.dataForm.destination = this.tableExport[index].Destination
                    this.dataForm.feet20 = this.tableExport[index].Feet20
                    this.dataForm.feet40 = this.tableExport[index].Feet40
                    this.dataForm.HC = this.tableExport[index].HC
                    this.dataForm.id = this.tableExport[index].id
                    this.enableSaveButton = false
                    //const result = await modelExport.getStayingSummary(this.tableExport[index].noDN, this.tableExport[index].partai)
                    //console.log(result)
                   console.log(this.tableExport[index])
                },
                hotInstance: null,
                tableHeader: [
                                'SC', 
                                'Delivery', 
                                'EMKL',
                                'Shipping Lines',
                                'Dest',
                                'Group',
                                'Form',
                                '20feet',
                                '40feet',
                                'HC',
                                'Qty',
                                'Closing Date',
                                'Closing Time',
                                'Remark'
                            ],
                jsonHeader: [   
                                "NoSC",
                                "NoDN",
                                "EMKL",
                                "ShippingLine",
                                "Destination",
                                "ProductGroup",
                                "ProductForm",
                                "Feet20",
                                "Feet40",
                                "HC",
                                "Qty",
                                "TglClosing",
                                "TimeClosing",
                                "Keterangan"
                            ],
                typeColumns: [
                    { type: 'text' }, // First column: text
                    { type: 'text' }, 
                    { type: 'text' }, 
                    { type: 'text' }, 
                    { type: 'text' },  
                    { type: 'text' },  
                    { type: 'text' },  
                    { type: 'text' },  
                    { type: 'text' },  
                    { type: 'text' },  
                    { type: 'text' },  
                    { type: 'text' },  
                    { type: 'text' },    
                    { type: 'text' },  
                    /*
                    { 
                        type: 'date',    
                        dateFormat: 'YYYY-MM-DD',
                        correctFormat: true,
                        allowEmpty: false
                    },
                        {
                        type: 'time',
                        timeFormat: 'HH:mm',
                        correctFormat: true,
                        allowEmpty: false
                        },
                    */
                    ],
                tableData: [[]],
                initTable() {
                const container = document.getElementById('hot');

                // Create an empty table with min rows/cols
                this.hotInstance = new Handsontable(container, {
                    data: this.tableData, // Start with one empty row
                    rowHeaders: true,
                    colHeaders: this.tableHeader,
                    columns: this.typeColumns,
                    minRows: 10, // Minimum rows to display
                    minSpareRows: 1,
                    minCols: 11, // Minimum columns to display
                    stretchH: 'all',
                    licenseKey: 'non-commercial-and-evaluation', // Required for Handsontable

                    columnSorting: true,
                    filters: true,
                    height: 'auto',
                    copyPaste: true, // Enable built-in copy/paste
                });
                this.hotInstance.addHook('beforePaste', (data, coords) => {
                    // Normalize LibreOffice Calc clipboard data
                    for (let r = 0; r < data.length; r++) {
                        for (let c = 0; c < data[r].length; c++) {
                        if (typeof data[r][c] === 'string') {
                            // Trim spaces and quotes
                            data[r][c] = data[r][c].trim().replace(/^"|"$/g, '');
                        }
                        }
                    }
                    // Returning false cancels paste, so we just return nothing to allow it
                    });

                },
                logData() {
                const tableData = this.hotInstance.getData();
                const jsonData = tableData.map(row => {
                        const obj = {};
                        this.jsonHeader.forEach((header, index) => {
                        obj[header] = row[index]??"";
                        });
                    return obj;
                });
                const excelData = tableData.map(row => {
                        const obj = {};
                        this.tableHeader.forEach((header, index) => {
                        obj[header] = row[index]??"";
                        });
                    return obj;
                });
                
                const result = jsonData.filter(obj => obj.noDN != "");
                const result2 = excelData.filter(obj => obj.Delivery != "");
                console.log('Current Table Data:', result);
                alert(JSON.stringify(result));
                },
                clearImport(){
                    this.dataShow = true
                    this.importShow = false
                },
                async simpanData(){
                    const tableData = this.hotInstance.getData();
                    const jsonData = tableData.map(row => {
                            const obj = {};
                            this.jsonHeader.forEach((header, index) => {
                            obj[header] = row[index]??"";
                            });
                        return obj;
                    });
                    const result = jsonData.filter(obj => obj.NoDN != "");
                    result.forEach(item => {
                        item.Warehouse = this.dataForm.warehouse // Injecting a new key-value property directly
                        item.TglBOC = this.dataForm.tglBOC; // Injecting a new key-value property directly
                        item.TglClosing = item.TglClosing + "-" +new Date().getFullYear()
                        item.TimeClosing = item.TimeClosing.replace(".", ":")
                    });
                    
                    //let url = "http://localhost:8080/boc/add"
                    let url = serverHosting + "/boc/add"
                    try {
                        const data = await (await fetch(url, { method: 'POST', 
                            headers: {'Content-Type': 'application/json'},
                            body: JSON.stringify({ 
                                data: result})
                            })).json()
                        this.dataShow = true
                        this.importShow = false
                        console.log(data)
                    } catch(error) {
                        console.error("One of the promises failed:", error);
                        notify(error, 'danger');
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