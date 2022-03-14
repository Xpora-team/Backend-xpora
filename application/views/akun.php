<div class="container-fluid">
  <div style="float: right;">
    <a href="<?= site_url('akun/create_akun') ?>"><button type="submit" class="btn btn-success">Create Akun</button></a>
    <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Download
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Download all data</a>
        <a class="dropdown-item" href="#">Download filtered data</a>
        <a class="dropdown-item" href="#">Share filtered data</a>
      </div>
    </a>
  </div>

  <div style="clear:both; padding-bottom:15px;"></div>
  <div class="table-responsive">
    <div class="table-wrapper">
      <table class="table-striped">
        <thead>
          <th></th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="User id" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm">Search</i>
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="User Name" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm">Search</i>
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="Company Name" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm">Search</i>
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="Region" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm">Search</i>
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="Comodity Category" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm">Search</i>
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="Verification" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  All
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </i>
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="User type" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  All
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </i>
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="Create Date" aria-label="Search" aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pick a date
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              </span>
            </div>
          </th>
          <th>
            <div class="rounded form-group">
              <input type="search" class="form-control rounded" placeholder="Action" aria-describedby="search-addon" />
              <span class="input-group-prepend">
                <span class="form-group"></span>
              </span>
            </div>
          </th>
        </thead>
        <!-- awalan Tbody -->

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($akun as $rs) : ?>
            <tr>
              <td>
                <span class="custom-checkbox">
                  <input type="checkbox" id="checkbox1" name="options[]" value="1" />
                  <label for="checkbox1"></label>
                </span>
              </td>
              <td><?= $rs->nik; ?></td>
              <td><?= $rs->nama_pemilik; ?></td>
              <td><?= $rs->bidang_usaha; ?></td>
              <td><?= $rs->domisili; ?></td>
              <td><?= $rs->komoditi; ?></td>
              <td><?= $rs->verifikasi; ?></td>
              <td><?= $rs->user_type; ?></td>
              <td><?= $rs->create_date; ?></td>


              <td>
                <a href="#deleteEmployeeModal" class="btn-outline-secondary" data-toggle="modal">Delete</a>
                <a href="#editEmployeeModal" class="btn-outline-secondary" data-toggle="modal">Detail</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
        <!-- akhir tbody -->
      </table>
      <!-- Page -->
      <div class="clearfix mt-3" id="merak">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled m-1"><a href="#">Previous</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>