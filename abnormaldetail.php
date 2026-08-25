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
                            <div class="page-wrapper" x-data="showReport()">
                                    

                                    
                                    
                                     <!-- Page body 2 start -->
                                    <div class="page-body button-page" x-show="dataShow">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Detail Abnormal</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        
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
                                                            <table class="table table-hover table-fixed">
                                                                <thead>
                                                                    <tr class="bg-primary">
                                                                        <th>No</th>
                                                                        <th>Tanggal</th>
                                                                        <th>Photo</th>
                                                                        <th>Unit ID</th>
                                                                        <th>Reason</th>
                                                                        <th>Keterangan</th>
                                                                        <th>User ID</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <template x-for="(mwhData,index) in tableMWH" >
                                                                        <tr>
                                                                            <th scope="row" x-text="index+1"></th>
                                                                            <td x-text="indoDate(mwhData.Tanggal)"></td>
                                                                            <td>
                                                                                <span class="ti-camera" data-toggle="modal" data-target="#modalAction" @click="setPictureUrl(mwhData.filehost + mwhData.filepath + mwhData.filename)"></span>
                                                                            </td>
                                                                            <td x-text="mwhData.UnitID"></td>
                                                                            <td x-text="mwhData.Reason"></td>
                                                                            <td x-text="mwhData.Keterangan"></td>
                                                                            <td x-text="mwhData.UserID"></td>
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


                                <div class="modal fade" id="modalAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Photo picture</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img id="myImage" width="100%" />
                                            </div>
                                            <div class="modal-footer">
                                                                                                
                                                <button type="button" class="btn btn-primary" @click="downloadImage">Download</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
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
        function showReport() {
            return {
                warehouse: "PM3",
                tglFrom: hariIni(),
                tglTo: hariIni(),
                dataShow: true,
                formShow: false,
                importShow: false,
                pictureUrl: "",
                NoDN: 0,
                errors: {},
                clearForm(){
                    this.warehouse = "PM3"
                    this.tglFrom = hariIni()
                    this.tglTo = hariIni()
                },
                async setPictureUrl(url){ 
                    this.pictureUrl = url

                    const parsedUrl = new URL(url);
                    const hostname = parsedUrl.hostname; // e.g., sub.example.co.uk
                    let imageUrl = ""

                   // if(hostname=="fgd.my.id"){
                        imageUrl = serverHosting + "/abnormal/image?url=" + url
                    
                        Alpine.store('globVar').isLoading = true
                        try{
                            // Fetch the image with a custom header
                            const response = await fetch(imageUrl, {
                            method: "GET",
                            headers: {
                                "ngrok-skip-browser-warning": "random" // Custom header
                            }
                            });

                            if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status}`);
                            }

                            // Convert the response to a Blob
                            const blob = await response.blob();

                            // Create a local object URL for the blob
                            const imgURL = URL.createObjectURL(blob);

                            // Set the <img> src to the blob URL
                            document.getElementById("myImage").src = imgURL;

                        } catch (error) {
                            console.error("Error loading image:", error);
                            document.getElementById("myImage").alt = "Failed to load image.";
                        } finally {
                            Alpine.store('globVar').isLoading = false
                        }

                   
                    
                },
                async downloadImage() {
                    try {
                        // Create a temporary <a> element
                        const link = document.createElement('a');
                        link.href = this.pictureUrl
                        link.download = this.pictureUrl.split('/').pop() || 'download.png';
                        link.target = "_blank"
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    } catch (error) {
                        console.error('Download failed:', error);
                        alert('Failed to download image.');
                    }
                },
                tableMWH: [],
                enableSaveButton: true,
                selDetailValue: "true",
                async getData(){
                    Alpine.store('globVar').isLoading = true
                    //this.dateFrom = new Date(document.getElementById("txt_tglFrom").value)
                    //this.dateTo = addOneDayToDate(new Date(document.getElementById("txt_tglTo").value))
                    
                    try{
                        //this.tableMWH = await modelExport.readExportByDate(this.dateFrom,this.dateTo)
                        //this.tableMWH = await modelExport.getMergedClosingByDate(this.dateFrom,addOneDayToDate(new Date(this.dateTo)))
                        let url = serverHosting + "/abnormal/getByDate"
                        //let url = "http://localhost:8080" + "/abnormal/getByDate"
                        let postBody = { 
                                    "tglFrom": this.tglFrom,
                                    "tglTo": this.tglTo,
                                    "warehouse": this.warehouse
                                }
                        
                            console.log(postBody)
                        try {
                            const data = await (await fetch(url, { method: 'POST', 
                                headers: {'Content-Type': 'application/json'},
                                body: JSON.stringify(postBody)
                                })).json()
                            this.tableMWH = data.data
                            this.dataShow = true
                            console.log(data)
                        } catch(error) {
                            console.error("One of the promises failed:", error);
                            notify(error, 'danger');
                        }
                        //this.tableMWH = await modelExport.readExport()
                        console.log(this.tableMWH)
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