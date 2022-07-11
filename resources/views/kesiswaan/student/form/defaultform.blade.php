<div class="card full-height">
    <div class="card-header">
        <div class="card-head-row">
            <div class="card-title">
                <dt>Form Data Siswa</dt>
                <div class="text-muted mt-0" style="font-size:0.8rem">Pastikan Pengisian Sesuai Dengan Ketentuan </div>
            </div>

            <div class="card-tools">
                <a href="{{url('student')}}" class="btn btn-outline-primary border-br15 btn-me">
                    <span class="btn-label">
                        <i class="flaticon-right"></i>
                    </span>
                   Back
                </a>
            </div>
        </div>
    </div>
    <div class="card-body row">
        <div class="col-md-4">
            <div class="nav flex-column nav-pills nav-info nav-pills-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab-nobd" data-toggle="pill" href="#v-pills-home-nobd" role="tab" aria-controls="v-pills-home-nobd" aria-selected="true">
                    Data Siswa
                </a>
                <a class="nav-link" id="v-pills-profile-tab-nobd" data-toggle="pill" href="#v-pills-profile-nobd" role="tab" aria-controls="v-pills-profile-nobd" aria-selected="false">Data Orang Tua/Wali</a>
                <a class="nav-link" id="v-pills-messages-tab-nobd" data-toggle="pill" href="#v-pills-messages-nobd" role="tab" aria-controls="v-pills-messages-nobd" aria-selected="false">Management Kelas</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content" id="v-pills-without-border-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home-nobd" role="tabpanel" aria-labelledby="v-pills-home-tab-nobd">
                    @include($folder.'.formsiswa')
                </div>
                <div class="tab-pane fade" id="v-pills-profile-nobd" role="tabpanel" aria-labelledby="v-pills-profile-tab-nobd">
                    @include($folder.'.formfamily')
                </div>
                <div class="tab-pane fade" id="v-pills-messages-nobd" role="tabpanel" aria-labelledby="v-pills-messages-tab-nobd">
                    @include($folder.'.formclassroom')
                </div>
            </div>

        </div>
    </div>

</div>
