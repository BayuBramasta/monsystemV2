<!-- Main Content-->
<main class="mb-4 mt-5">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 mt-3">
                <!-- <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p> -->
                <p class="fs-1">Form Reservasi</p>
                <div class="my-5">
                    <form id="contactForm" method="POST" action="controller/controller_reservasi.php" data-sb-form-api-token="API_TOKEN">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="name" name="nama" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="nrp" type="text" placeholder="Enter your nrp..." data-sb-validations="required,email" />
                                    <label for="email">NRP</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="phone" name="telp" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Nomor Telepon</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="text" name="pembimbing" placeholder="Enter your nama Pembimbing..." data-sb-validations="required" />
                                    <label for="message">Nama Pembimbing</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="softwere" placeholder="Enter your softwere..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Softwere yang digunakan</label>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input class="form-control" id="datepicker" name="tanggal" type="text" placeholder="Enter your phone tanggal running..." data-sb-validations="required" />
                                    <label for="message">Tanggal Running</label>
                                </div>
                            </div>
                        </div>
                        <br />
                        <!-- Submit Button-->
                        <input class="btn btn-primary text-uppercase" value="submit" type="submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>