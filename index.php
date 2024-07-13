<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>My Fortofolio | y M Ilham</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning shadow fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">M Ilham Qodri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Halaman Utama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang Saya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#documentation">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak Saya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skills">Skills</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="jumbotron text-center">
      <div class="container" data-aos="zoom-in-up">
        <img src="img/ilham.jpg" alt="rizky" width="200" class="rounded-circle img-thumbnail" />
        <h3 class="mt-3">I'm</h3>
        <h1 id="full_name" class="display-4">Muhammad Ilham Qodri</h1>
        <p id="job_position" class="lead">Mahasiswa | Web Designer</p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,192L0,192L36.9,192L36.9,192L73.8,192L73.8,64L110.8,64L110.8,32L147.7,32L147.7,160L184.6,160L184.6,320L221.5,320L221.5,64L258.5,64L258.5,256L295.4,256L295.4,288L332.3,288L332.3,192L369.2,192L369.2,64L406.2,64L406.2,64L443.1,64L443.1,96L480,96L480,128L516.9,128L516.9,288L553.8,288L553.8,224L590.8,224L590.8,128L627.7,128L627.7,192L664.6,192L664.6,64L701.5,64L701.5,288L738.5,288L738.5,192L775.4,192L775.4,224L812.3,224L812.3,224L849.2,224L849.2,32L886.2,32L886.2,224L923.1,224L923.1,96L960,96L960,192L996.9,192L996.9,256L1033.8,256L1033.8,96L1070.8,96L1070.8,0L1107.7,0L1107.7,288L1144.6,288L1144.6,128L1181.5,128L1181.5,224L1218.5,224L1218.5,96L1255.4,96L1255.4,224L1292.3,224L1292.3,32L1329.2,32L1329.2,192L1366.2,192L1366.2,192L1403.1,192L1403.1,64L1440,64L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>

    <section id="about">
      <div class="container">
        <div class="row text-center">
          <div class="col mt-5">
            <h2>Tentang Saya</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-4 mt-5 text-center">
          <div class="col-md-5">
            <p>
              Perkenalkan nama saya Muhammad ilham Qodri. lahir di Lampung pada 15 Desember 2002. Sekarang saya tinggal di Ciamis Jawa Barat sejak tahun 2018, Tepatnya setelah saya lulus SMP, Alasan saya memutuskan untuk pindah ke Ciamis
              adalah saya ingin merasakan suasana yang berbeda oleh karna itu saya memutuskan untuk pindah ke ciamis. Alamat lengkap Tempat tinggal Saya di Ds.Karang Ampel Kec. Baregbeg Kab.Ciamis Jawa Barat.
            </p>
          </div>
          <div class="col-md-5">
            <p>
              Sekarang Saya berkuliah di Universitas Galuh Ciamis di jurusan Sistem Informasi dan selama di jurusan Sistem Informasi Saya Mulai bisa menggunakan aplikasi Adobe Xd, Corel Draw dan Figma dan mampu mebuat desain website yang
              saya inginkan serta saya dapat mengerjakan tugas UI/UX dengan cukup baik, cita-cita saya yaitu menjadi web designer profesional.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c9c9c9"
          fill-opacity="1"
          d="M0,160L0,192L72,192L72,160L144,160L144,288L216,288L216,128L288,128L288,224L360,224L360,128L432,128L432,0L504,0L504,160L576,160L576,128L648,128L648,256L720,256L720,256L792,256L792,288L864,288L864,288L936,288L936,192L1008,192L1008,128L1080,128L1080,224L1152,224L1152,288L1224,288L1224,32L1296,32L1296,192L1368,192L1368,224L1440,224L1440,320L1368,320L1368,320L1296,320L1296,320L1224,320L1224,320L1152,320L1152,320L1080,320L1080,320L1008,320L1008,320L936,320L936,320L864,320L864,320L792,320L792,320L720,320L720,320L648,320L648,320L576,320L576,320L504,320L504,320L432,320L432,320L360,320L360,320L288,320L288,320L216,320L216,320L144,320L144,320L72,320L72,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>

    <section id="documentation">
      <div class="container">
        <div class="row text-center">
          <div class="col mt-5">
            <h2>Projects</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mt-5">
            <div class="card">
              <img src="img/Gambar 1.png" class="card-img-top" alt="foto1" />
              <div class="card-body">
                <p class="card-text">Web toko roti Bakery House</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-5">
            <div class="card">
              <img src="img/Gambar 3.png" class="card-img-top" alt="foto2" />
              <div class="card-body">
                <p class="card-text">Website Portofolio</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-5">
            <div class="card">
              <img src="img/Gambar 2.png" class="card-img-top" alt="foto3" />
              <div class="card-body">
                <p class="card-text">Proses edit web Toko Roti Bakery House</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L0,128L55.4,128L55.4,64L110.8,64L110.8,32L166.2,32L166.2,32L221.5,32L221.5,256L276.9,256L276.9,256L332.3,256L332.3,288L387.7,288L387.7,64L443.1,64L443.1,96L498.5,96L498.5,256L553.8,256L553.8,64L609.2,64L609.2,96L664.6,96L664.6,288L720,288L720,128L775.4,128L775.4,64L830.8,64L830.8,224L886.2,224L886.2,32L941.5,32L941.5,224L996.9,224L996.9,64L1052.3,64L1052.3,192L1107.7,192L1107.7,288L1163.1,288L1163.1,192L1218.5,192L1218.5,128L1273.8,128L1273.8,288L1329.2,288L1329.2,160L1384.6,160L1384.6,0L1440,0L1440,320L1384.6,320L1384.6,320L1329.2,320L1329.2,320L1273.8,320L1273.8,320L1218.5,320L1218.5,320L1163.1,320L1163.1,320L1107.7,320L1107.7,320L1052.3,320L1052.3,320L996.9,320L996.9,320L941.5,320L941.5,320L886.2,320L886.2,320L830.8,320L830.8,320L775.4,320L775.4,320L720,320L720,320L664.6,320L664.6,320L609.2,320L609.2,320L553.8,320L553.8,320L498.5,320L498.5,320L443.1,320L443.1,320L387.7,320L387.7,320L332.3,320L332.3,320L276.9,320L276.9,320L221.5,320L221.5,320L166.2,320L166.2,320L110.8,320L110.8,320L55.4,320L55.4,320L0,320L0,320Z"
        ></path>
      </svg>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row text-center mt-5">
          <div class="col">
            <h2>Kontak Saya</h2>
          </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-warning">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="skills">
      <div class="container">
        <div id="message"></div>
        <h1 class="mt-4 mb-4 text-center text-danger">SKILLS CRUD</h1>
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col col-sm-9">USERS</div>
              <div class="col col-sm-3">
                <button type="button" id="add_data" class="btn btn-success btn-sm float-end">Add</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered" id="sample_data">
                <thead>
                  <tr>
                    <th>User Id</th>
                    <th>Skill Name</th>
                    <th>Rating</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal" tabindex="-1" id="action_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" id="sample_form">
                <div class="modal-header">
                  <h5 class="modal-title" id="dynamic_modal_title"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">User Id</label>
                    <input type="text" name="user_id" id="user_id" class="form-control" />
                    <span id="user_id_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Skill Name</label>
                    <input type="text" name="skill_name" id="skill_name" class="form-control" />
                    <span id="skill_name_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <input type="text" name="rating" id="rating" class="form-control" />
                    <span id="rating_error" class="text-danger"></span>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" id="description" class="form-control" />
                    <span id="description_error" class="text-danger"></span>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="id" id="id" />
                  <input type="hidden" name="action" id="action" value="Add" />
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="action_button">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function () {
        showAll();

        $("#add_data").click(function () {
          $("#dynamic_modal_title").text("Add Biodata User");
          $("#sample_form")[0].reset();
          $("#action").val("Add");
          $("#action_button").text("Add");
          $(".text-danger").text("");
          $("#action_modal").modal("show");
        });

        $("#sample_form").on("submit", function (event) {
          event.preventDefault();
          if ($("#action").val() == "Add") {
            var formData = {
              user_id: $("#user_id").val(),
              skill_name: $("#skill_name").val(),
              rating: $("#rating").val(),
              description: $("#description").val(),
            };

            $.ajax({
              url: "https://milham15.amisbudi.cloud/web_porto/si-admin/api/skills/create.php",
              method: "POST",
              data: JSON.stringify(formData),
              success: function (data) {
                $("#action_button").attr("disabled", false);
                $("#message").html('<div class="alert alert-success">' + data.message + "</div>");
                $("#action_modal").modal("hide");
                $("#sample_data").DataTable().destroy();
                showAll();
              },
              error: function (err) {
                console.log(err);
              },
            });
          } else if ($("#action").val() == "Update") {
            var formData = {
              id: $("#id").val(),
              user_id: $("#user_id").val(),
              skill_name: $("#skill_name").val(),
              rating: $("#rating").val(),
              description: $("#description").val(),
            };

            $.ajax({
              url: "https://milham15.amisbudi.cloud/web_porto/si-admin/api/skills/update.php",
              method: "PUT",
              data: JSON.stringify(formData),
              success: function (data) {
                $("#action_button").attr("disabled", false);
                $("#message").html('<div class="alert alert-success">' + data.message + "</div>");
                $("#action_modal").modal("hide");
                $("#sample_data").DataTable().destroy();
                showAll();
              },
              error: function (err) {
                console.log(err);
              },
            });
          }
        });
      });

      function showAll() {
        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://milham15.amisbudi.cloud/web_porto/si-admin/api/skills/read.php",
          success: function (response) {
            // console.log(response);
            var json = response.body;
            var dataSet = [];
            for (var i = 0; i < json.length; i++) {
              var sub_array = {
                user_id: json[i].user_id,
                skill_name: json[i].skill_name,
                rating: json[i].rating,
                description: json[i].description,
                action: '<button onclick="showOne(' + json[i].id + ')" class="btn btn-sm btn-warning">Edit</button>' + '<button onclick="deleteOne(' + json[i].id + ')" class="btn btn-sm btn-danger">Delete</button>',
              };
              dataSet.push(sub_array);
            }
            $("#sample_data").DataTable({
              data: dataSet,
              columns: [{ data: "user_id" }, { data: "skill_name" }, { data: "rating" }, { data: "description" }, { data: "action" }],
            });
          },
          error: function (err) {
            console.log(err);
          },
        });
      }

      function showOne(id) {
        $("#dynamic_modal_title").text("Edit Biodata User");
        $("#sample_form")[0].reset();
        $("#action").val("Update");
        $("#action_button").text("Update");
        $(".text-danger").text("");
        $("#action_modal").modal("show");

        $.ajax({
          type: "GET",
          contentType: "application/json",
          url: "https://milham15.amisbudi.cloud/web_porto/si-admin/api/skills/read.php?id=" + id,
          success: function (response) {
            $("#id").val(response.id);
            $("#user_id").val(response.user_id);
            $("#skill_name").val(response.skill_name);
            $("#rating").val(response.rating);
            $("#description").val(response.description);
          },
          error: function (err) {
            console.log(err);
          },
        });
      }

      function deleteOne(id) {
        var konfirmasiUser = confirm("Yakin untuk hapus data ?");
        if (konfirmasiUser) {
          $.ajax({
            url: "https://milham15.amisbudi.cloud//web_porto/si-admin/api/skills/delete.php",
            method: "DELETE",
            data: JSON.stringify({ id: id }),
            success: function (data) {
              $("#action_button").attr("disabled", false);
              $("#message").html('<div class="alert alert-success">' + data + "</div>");
              $("#action_modal").modal("hide");
              $("#sample_data").DataTable().destroy();
              showAll();
            },
            error: function (err) {
              console.log(err);
            },
          });
        }
      }
    </script>
    <footer class="bg-warning text-center fs-5 p-3">
      <p>Dibuat Dengan Sepenuh Hati By <a href="https://www.instagram.com/ilhamqodri15?igsh=aWtsd3ZjenFya3dk" class="">M Ilham Qodri</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
