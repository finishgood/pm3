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


    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

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
                            <div class="page-wrapper" x-data="GoodReceipt()" x-init="$refs.txt_unitID.focus()">
                                    

                                    <!-- Modal -->
                                        <div class="modal fade" id="modalScanCamera" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Scan Barcode</h5>
                                                        <button id="btnModalScanClose" type="button" @click="stopScanner()" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div id="qr-reader"></div>
                                                        <div id="qr-reader-results"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" @click="stopScanner()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                     <!-- Page body 2 start -->
                                    <div class="page-body button-page">
                                        <div class="row">
                                            <!-- bootstrap modal start -->
                                            <div class="col-sm-12">
                                                <!-- Notification card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="text-center"><div x-text="warehouse"></div>Form Abnormal / Defect<br /></h3>
                                                    </div>
                                                    <div class="card-block">
                                                        <form @submit.prevent="submitForm">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label-lg text-center">Unit ID</label>
                                                                <div class="col-sm-6 text-center">
                                                                        <input id="txt_unitID" 
                                                                        x-model="unitID" 
                                                                        x-ref="txt_unitID" 
                                                                        type="text" class="form-control-lg form-control-info form-control-center">
                                                                </div>
                                                                <div class="col-sm-2 text-center">
                                                                    <button class="btn waves-effect waves-light btn-md btn-out-dashed"  @click="startScanner()" 
                                                                    data-toggle="modal" data-target="#modalScanCamera">
                                                                        <span class="icofont icofont-barcode"> Scan</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row ">
                                                                <label class="col-sm-2 col-form-label-lg text-center">Reason</label>
                                                                <div class="col-sm-6 col-form-label-lg text-center form-control-info">
                                                                        <select class="form-select" x-ref="select" x-model="selected" x-init="initSelect2()">
                                                                            <option value="">-- Pilih Reason --</option>
                                                                            <option value="Double ID">Double ID</option>
                                                                            <option value="Defect Forklift">Defect Forklift</option>
                                                                            <option value="Beda Tinggi">Beda Tinggi</option>
                                                                            <option value="Kurangi Muat">Kurangi Muat</option>
                                                                            <option value="Defect Packaging">Defect Packaging</option>
                                                                            <option value="Others">Others</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="form-group row mt-4 pt-4">
                                                                <label class="col-sm-2 col-form-label-lg text-center">Upload</label>
                                                                <div class="col-sm-6 text-center">
                                                                    <input type="file"  x-ref="imageInput" class="form-control-lg form-control-info"  name="images" accept="image/*">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label-lg text-center">Keterangan</label>
                                                                <div class="col-sm-6  text-center">
                                                                    <textarea rows="5" cols="30" class="form-control-lg form-control-info" x-model="keterangan"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <!-- Submit Controls -->
                                                                <label class="col-sm-2 col-form-label-lg text-center"></label>
                                                                    <div class="col-sm-6 text-center">
                                                                    <button type="submit" class="form-control-lg btn btn-primary">
                                                                        <span x-text="isSubmitting ? 'Uploading...' : 'Simpan'"></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        
                                                        </form>
                                                            
                                                        
                                                        
                                                        
                                                        
                                                            
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

    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript" src="assets/js/backend.js "></script>
    <script type="text/javascript" src="assets/js/functionIKK.js "></script>
    <script type="text/javascript" src="assets/js/auth.js "></script>
    <script type="module">
        
    </script>
    <script>
        
        //document.getElementById("txt_tglFrom").value = hariIni()
        //document.getElementById("txt_tglTo").value = hariIni()
        function GoodReceipt() {
            return {
                warehouse: "PM3",
                unitID: "",
                lokasi: "",
                keterangan:"",
                dock: "dock1",
                errors: {},
                palletData: {},
                sel_loading: "dock1",
                btnText:"GR",
                btnClass:"",
                action:"proses",
                btnShow:false,
                detailIMLShow:false,
                tableMWH: [],
                selectedFiles: [], // Stores actual File objects to send to backend
                previews: [],      // Stores local blob URLs for the <img> tags
                isSubmitting: false,
                message: '',

                selected: '',
                initSelect2() {
                    const self = this;
                    $(this.$refs.select)
                        .select2({
                            theme: 'bootstrap4', // Bootstrap theme
                            placeholder: '-- Pilih Reason --',
                            allowClear: true
                        })
                        .on('change', function () {
                            self.selected = $(this).val();
                        });
                },
                jenisKendaraan:"",result: '',
                html5QrCode: null,

                // Initialize the scanner
                startScanner() {

                    try {
                        this.html5QrCode = new Html5Qrcode("qr-reader");

                        const config = { 
                            fps: 10, qrbox: {width: 240, height: 120}
                        };

                        this.html5QrCode.start(
                            { facingMode: "environment" }, // Use back camera if available
                            config,
                            (decodedText, decodedResult) => {
                                // On successful scan
                                this.unitID = decodedText;
                                console.log("Decoded:", decodedText, decodedResult);
                                //this.getUnitID()
                                //this.$refs.txt_lokasi.focus()
                                this.stopScanner();
                            },
                            (errorMessage) => {
                                // Optional: handle scan errors
                                console.debug("QR scan error:", errorMessage);
                            }
                        ).catch(err => {
                            console.error("Unable to start scanning:", err);
                            this.result = "Camera access denied or unavailable.";
                        });
                    } catch (err) {
                        console.error("Scanner init error:", err);
                        this.result = "Error initializing scanner.";
                    }
                },

                // Stop the scanner
                stopScanner() {
                    console.log("executed")
                    document.getElementById("btnModalScanClose").click()
                    //document.getElementById('btnAction').click()
                    if (this.html5QrCode) {
                        this.html5QrCode.stop()
                            .then(() => {
                                console.log("Scanner stopped.");
                                this.result += " (Scanner stopped)";
                            })
                            .catch(err => console.error("Stop error:", err));
                    }
                },
                clearUnitID(){
                    this.unitID = {}
                },
                clearForm(){
                    this.warehouse = "PM3"
                    this.unitID = ""
                    this.action = "proses"
                    this.btnText = "Proses"
                    this.noForklift = ""
                    this.detailIMLShow = false
                    this.btnShow = false 
                    this.namaDriver = ""
                    this.dock = "dock1"
                    this.nopol = ""
                    this.keterangan = ""
                    this.jenisKendaraan = ""
                    this.previews.forEach(url => URL.revokeObjectURL(url));
                    this.selectedFiles = [];
                    this.previews = [];
                },
                async getUnitID() {
                    //let url = "http://localhost:8080"+"/mwhSheet/mes/unitid/"+this.unitID
                    let url = serverHosting+"/mwhSheet/mes/unitid/"+this.unitID
                    
                    Alpine.store('globVar').isLoading = true
                    try{
                            const data = await (await fetch(url, { method: 'GET', 
                            headers: {'Content-Type': 'application/json'}
                             })).json()
                             console.log(data)
                            if(data.success == true){
                                //notify("Pendaftaran Berhasil IML "+data.data.NoIML,"success")
                                this.palletData = data.data
                                
                                
                                this.btnShow = true

                               
                                //this.clearForm()
                            } else {
                                this.palletData = {}
                                this.btnShow = false
                                console.log(this.palletData)
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
                async submitForm() {
                
                    Alpine.store('globVar').isLoading = true
                    //let url = "http://localhost:8080/abnormal/add"
                    let url = serverHosting + "/abnormal/add"
                   // let url = serverHosting+"/mwhSheet/mes/unitid/"+this.unitID
                    this.isSubmitting = true;
                    this.message = '';

                    // 1. Initialize FormData instance
                    const data = new FormData();

                    // 2. Append standard text data
                    data.append("UnitID",this.unitID)
                    data.append("Reason",this.selected)
                    data.append("Keterangan",this.keterangan)
                    data.append("Warehouse",this.warehouse)
                    data.append("UserID",getUserObject().data.FullName)

                    // 3. Extract and append the file from Alpine's x-ref
                    const imageInput = this.$refs.imageInput;
                    if (imageInput.files.length > 0) {
                        data.append('images', imageInput.files[0]);
                    }

                    try {
                        
                        if(this.keterangan === ""){
                            throw new Error("Keterangan Wajib Di Isi")
                        }
                        if(this.selected === ""){
                            throw new Error("Reason Wajib Di Isi")
                        }
                        // 4. Send asynchronous request via fetch
                        const response = await fetch(url, {
                            method: 'POST',
                            body: data // FormData sets the correct 'multipart/form-data' header automatically
                        });

                        if (response.ok) {
                            this.message = 'Form submitted successfully!';
                            
                            notify('Form submitted successfully!',"success")
                            // Reset form fields
                            this.clearForm()
                        } else {
                        
                            notify('Submission failed. Server error.',"danger")
                        }
                    } catch (error) {
                        notify(error,"danger")
                        console.error(error);
                    } finally {
                        this.isSubmitting = false;
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