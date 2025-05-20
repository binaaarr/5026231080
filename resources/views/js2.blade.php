<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            function form_validation(){
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;

                if(nrp.length == 0 || nrp.length != 10 || isNan(nrp)){
                    // alert("NRP harus diisi!");
                    Swal.fire({
                    title: "NO!",
                    text: "Isi NRP dengan benar",
                    icon: "error"
                    });
                    document.getElementById("nrp").focus();
                    return false; 
                }
                if(nama.length == 0){
                    // alert("Nama harus diisi!");
                    Swal.fire({
                    title: "NO!",
                    text: "Nama harus diisi!",
                    icon: "error"
                    });
                    document.getElementById("nama").focus();
                    return false; 
                }
            }
        </script>
    </head>
    <body>
        <div class="container">
            <h3>Form Pendaftaran ISE!</h3>
            <form id="frmpendaftaran" action="https://google.com" method="get" onsubmit="return form_validation();">
                NRP: 
                <input type="text" id="nrp" class="form-control" placeholder="Silakan isi NRP, 10 digit, harus angka, dan tidak boleh kosong" name="nrp">
                <br>
                Nama:
                <input type="text" id="nama" class="form-control" placeholder="Silakan isi Nama, minimal 1 digit, dan tidak boleh kosong" name="nama">
                <br>
                <input type="submit" class="btn btn-primary" value="Daftar">

            </form>
        </div>
    </body>
</html>