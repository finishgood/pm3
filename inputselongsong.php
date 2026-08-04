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
                                                        <h5>Data Pemakaian Selongsong</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="form-group row">
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
                                                                        <th>No IML</th>
                                                                        <th>No DN</th>
                                                                        <th>Nama Supir</th>
                                                                        <th>Nopol</th>
                                                                        <th>Ekspedisi</th>
                                                                        <th>Customer</th>
                                                                        <th>Qty</th>
                                                                        <th>Tanggal</th>
                                                                        <th>Print</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <template x-for="(exportData,index) in tableExport" >
                                                                        <tr>
                                                                            <th scope="row" x-text="index+1"></th>
                                                                            <td x-text="exportData.NoIML"></td>
                                                                            <td x-text="exportData.ReffNum1"></td>
                                                                            <td x-text="exportData.NamaSupir"></td>
                                                                            <td x-text="exportData.NoPolisi"></td>
                                                                            <td x-text="exportData.Ekspedisi"></td>
                                                                            <td x-text="exportData.Customer"></td>
                                                                            <td x-text="exportData.QtySelongsong"></td>
                                                                            <td x-text="indoDate(exportData.TglDelivery)"></td>
                                                                            <td>
                                                                                <a @click="cetak(exportData.NoIML)" class="icofont icofont-print"></span>
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
                                                        <h5>Import Data Selongsong</h5>
                                                    </div>
                                                    <div class="card-block" x-init="initTable()">
                                                        <div class="form-group row">
                                                            <small>Tgl Delivery wajib di isi dengan format YYYY-MM-DD</small>
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
                    NoIML: "",
                    ReffNum1: "", 
                    ReffNum2: "",
                    NamaSupir: "",
                    NoPolisi: "",
                    TglDelivery: "",
                    QtySelongsong: "",
                    ESignature: "",
                    Remarks: "",
                    ActiveFlag: "",
                    CrtUsrID: "",
                    TsCrt: "",
                    ModUsrID: "",
                    TsMod: "",
                    warehouse: "PM3"
                },
                tglFrom: hariIni(),
                tglTo: hariIni(),
                dataShow: true,
                formShow: false,
                importShow: false,
                errors: {},
                clearForm(){
                    this.dataForm.NoIML = ""
                    this.dataForm.ReffNum1 = "" 
                    this.dataForm.ReffNum2 = ""
                    this.dataForm.NamaSupir = ""
                    this.dataForm.NoPolisi = ""
                    this.dataForm.TglDelivery = ""
                    this.dataForm.QtySelongsong = ""
                    this.dataForm.ESignature = ""
                    this.dataForm.Remarks = ""
                    this.dataForm.ActiveFlag = ""
                    this.dataForm.CrtUsrID = ""
                    this.dataForm.TsCrt = ""
                    this.dataForm.ModUsrID = ""
                    this.dataForm.TsMod = ""
                    this.dataForm.warehouse = "PM3"
                },
                dateFrom: "",
                dateTo: "",
                tableExport: [],
                enableSaveButton: true,
                selDetailValue: "true",
                cetak(id){
                    // Full URL with query string
                    const fullUrl = `assets/pages/form/cetakformselongsong.html?id=${id}`;

                    // Open in a new tab (_blank)
                    window.open(fullUrl, "_blank");
                },
                async getData(){
                    Alpine.store('globVar').isLoading = true
                    
                    try{
                        //let url = "http://localhost:8080/selongsong/bydate"
                        let url = serverHosting + "/selongsong/bydate"
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
                hotInstance: null,
                tableHeader: [
                                'No IML', 
                                'ReffNum1', 
                                'ReffNum2',
                                'Nama Driver',
                                'Nopol',
                                'Tgl Delivery',
                                'Qty',
                                'ESignature',
                                'Remark',
                                'ActiveFlag',
                                'UserID',
                                'TsCrt',
                                'ModUsrID',
                                'TsMod'
                            ],
                jsonHeader: [   
                                "NoIML",
                                'ReffNum1', 
                                'ReffNum2',
                                "NamaSupir",
                                "NoPolisi",
                                "TglDelivery",
                                "QtySelongsong",
                                "ESignature",
                                "Remarks",
                                "ActiveFlag",
                                "CrtUsrID",
                                "TsCrt",
                                "ModUsrID",
                                "TsMod"
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
                    const result = jsonData.filter(obj => obj.ReffNum1 != "");
                    result.forEach(item => {
                        item.Warehouse = this.dataForm.warehouse // Injecting a new key-value property directly
                    });
                    console.log(result)
                    //let url = "http://localhost:8080/selongsong/add"
                    let url = serverHosting + "/selongsong/add"
                    try {
                        const data = await (await fetch(url, { method: 'POST', 
                            headers: {'Content-Type': 'application/json'},
                            body: JSON.stringify({ 
                                data: result})
                            })).json()
                        this.dataShow = true
                        this.importShow = false
                        //console.log(data)
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