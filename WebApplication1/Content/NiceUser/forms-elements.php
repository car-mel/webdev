<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
     /* Add CSS to move the action column to the right and give more space for content */
  #announcementTable th:nth-child(3),
  #announcementTable td:nth-child(3) {
    text-align: right;
  }

  #announcementTable th:nth-child(2),
  #announcementTable td:nth-child(2) {
    width: 70%; /* Adjust the width to your preference */
  }

    .custom-card {
    margin-top: 20px;
    max-height: 1000px; /* Set a maximum height for the card */
    overflow-y: auto; /* Add a vertical scrollbar when content exceeds the maximum height */
    
}
  .table-responsive{
    overflow-y:scroll;
  }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../Responsive-Landing-Page/img/png-clipart-blue-note-illustration-computer-icons-document-checklist-icon-blue-blue-checklist-document-miscellaneous-blue-thumbnail.png" alt="">
        <span class="d-none d-lg-block">TaskManager</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="./assets/img/profile.webp" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">C.M Sombilon</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Carmel Mae Sombilon</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Responsive-Landing-Page/index.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="../Responsive-Landing-Page/NewBiz/index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Activities</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.php" class="active">
              <i class="bi bi-circle"></i><span>Activities and Announcements</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->


  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../Responsive-Landing-Page/NewBiz/index.html">Back To Home</a></li>
          <li class="breadcrumb-item active">User Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">ADD ACTIVITY</h5>

              <!-- Vertical Form -->
              <form id="activityForm" class="row g-3"  method="POST" action="save_activity.php">
                <div class="col-12">
                  <label for="inputName" class="form-label">Name of Activity</label>
                  <input type="text" class="form-control" id="inputName">
                </div>
                <div class="col-12">
                  <label for="inputDate" class="form-label">Date</label>
                  <input type="date" class="form-control" id="inputDate"> <!-- Corrected the ID to "inputDate" -->
                </div>
                <div class="col-12">
                  <label for="inputTime" class="form-label">Time</label>
                  <input type="time" class="form-control" id="inputTime">
                </div>
                <div class="col-12">
                  <label for="inputLocation" class="form-label">Location</label>
                  <input type="text" class="form-control" id="inputLocation">
                </div>
                <div class="col-12">
                  <label for="inputOotd" class="form-label">OOTD</label>
                  <input type="text" class="form-control" id="inputOotd">
                </div>

                <div class="text-center">
                  <button type="button" class="btn btn-primary" onclick="addToTable()">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>

        <div class="col-lg-8" style="max-height: 600px; overflow-y: auto;">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lists of Activities</h5> 

              <table class="table" id="activityTable">
                <thead>
                  <tr>
                    <th style="color: #012970;">Name of Activity</th>
                    <th style="color: #012970;">Date</th>
                    <th style="color: #012970;">Time</th>
                    <th style="color: #012970;">Location</th>
                    <th style="color: #012970;">OOTD</th>
                    <th style="color: #012970;">Remarks</th>
                    <th style="color: #012970;">Actions</th> <!-- New column for edit button -->
                  </tr>
                </thead>
                <tbody>
                <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproj";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM activities ORDER BY date';
$result = $conn->query($sql);
?>
               
      
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['name'];  ?></td>
                <td><?php echo $row['date'];  ?></td>
                <td><?php echo $row['time'];  ?></td>
                <td><?php echo $row['location'];  ?></td>
                <td><?php echo $row['ootd'];  ?></td>
                <td><select onchange="handleRemarksChange(this)"><option value="Pending">To-Do</option><option value="Done">Completed</option><option value="Cancel">Cancel</option></select></td>
                <td><button onclick="editRow(this)" class="btn btn-primary">Edit</button></td>
            </tr>
        <?php } ?>
    </table>


              <script>
                function addToTable() {
                  // Get form input values
                  var name = document.getElementById("inputName").value;
                  var date = document.getElementById("inputDate").value;
                  var time = document.getElementById("inputTime").value;
                  var location = document.getElementById("inputLocation").value;
                  var ootd = document.getElementById("inputOotd").value;

                  // Format the time with AM/PM
                  var [hours, minutes] = time.split(":");
                  var ampm = hours >= 12 ? "PM" : "AM";
                  hours = hours % 12 || 12;
                  time = hours + ":" + minutes + " " + ampm;

                  // Create a new row in the table
                  var table = document.getElementById("activityTable").getElementsByTagName('tbody')[0];
                  var noActivitiesRow = document.getElementById("noActivitiesRow");
                  var newRow = table.insertRow(table.rows.length - 1);

                  // Insert data into the row
                  var cell1 = newRow.insertCell(0);
                  var cell2 = newRow.insertCell(1);
                  var cell3 = newRow.insertCell(2);
                  var cell4 = newRow.insertCell(3);
                  var cell5 = newRow.insertCell(4);
                  var cell6 = newRow.insertCell(5);
                  var cell7 = newRow.insertCell(6); // New cell for edit button

                  // Create a FormData object to store form data
                  var formData = new FormData();
                  formData.append("name", name);
                  formData.append("date", date);
                  formData.append("time", time);
                  formData.append("location", location);
                  formData.append("ootd", ootd);

                  // Make an AJAX request to save_activity.php
                  var xhr = new XMLHttpRequest();
                  xhr.open("POST", "save_activity.php", true);
                  xhr.onload = function () {
                    if (xhr.status === 200) {
                      // Data saved successfully, update the table or perform other actions
                      console.log(xhr.responseText);
                    } else {
                      // Handle the error
                      console.error("Error saving activity: " + xhr.statusText);
                    }
                  };
                  xhr.send(formData);

                  cell1.innerHTML = name;
                  cell2.innerHTML = date;
                  cell3.innerHTML = time;
                  cell4.innerHTML = location;
                  cell5.innerHTML = ootd;
                  cell6.innerHTML = '<select onchange="handleRemarksChange(this)"><option value="Pending">To-Do</option><option value="Done">Completed</option><option value="Cancel">Cancel</option></select>';
                  cell7.innerHTML = '<button onclick="editRow(this)" class="btn btn-primary">Edit</button>'; // Edit button

                  // Clear form inputs
                  document.getElementById("activityForm").reset();

                  // Hide the "No activities added yet" row if there are activities in the table
                  noActivitiesRow.style.display = table.rows.length <= 1 ? "table-row" : "none";

                  // Sort the table rows based on the date column
                  sortTableByDate();

                  // Update the bar graph
                  updateBarGraph(date);

                  function updateBarGraph(date) {
                    // Extract the month (1-12) from the selected date (assuming date is in the format YYYY-MM-DD)
                    var selectedMonth = new Date(date).getMonth() + 1;

                    // Get the chart instance
                    var chart = window.myBar;

                    if (chart) {
                      var dataset = chart.data.datasets[0].data;

                      if (selectedMonth >= 1 && selectedMonth <= 12) {
                        // Check if the dataset array has enough elements
                        if (dataset.length < 12) {
                          // Add missing elements to the dataset array
                          var missingMonths = 12 - dataset.length;
                          for (var i = 0; i < missingMonths; i++) {
                            dataset.push(0);
                          }
                        }

                        // Update the data for the selected month in the bar graph
                        dataset[selectedMonth - 1]++;
                        chart.update();
                      } else {
                        console.error("Invalid month: " + selectedMonth);
                      }
                    } else {
                      console.error("Chart instance not found.");
                    }
                  }
                }

                function handleRemarksChange(selectElement) {
                  var selectedOption = selectElement.value;
                  var row = selectElement.closest("tr");

                  if (selectedOption === "Cancel") {
                    row.remove();
                  } else if (selectedOption === "Done") {
                    for (var i = 0; i < row.cells.length; i++) {
                      row.cells[i].style.backgroundColor = "Lavender";
                    }
                    var remarksCell = row.cells[5];
                    remarksCell.innerHTML = "Accomplished";

                    // Remove the edit button
                    var actionsCell = row.cells[6];
                    actionsCell.innerHTML = "";
                  }
                }

              
        

                function editRow(button) {
                  var row = button.closest("tr");
                  var name = row.cells[0].innerHTML;
                  var date = row.cells[1].innerHTML;
                  var time = row.cells[2].innerHTML;
                  var location = row.cells[3].innerHTML;
                  var ootd = row.cells[4].innerHTML;

                  // Set the form inputs with the row data
                  document.getElementById("inputName").value = name;
                  document.getElementById("inputDate").value = date;
                  document.getElementById("inputTime").value = time;
                  document.getElementById("inputLocation").value = location;
                  document.getElementById("inputOotd").value = ootd;

                  // Remove the row from the table
                  row.remove();
                }
              
              </script>
            </div>
          </div>
        </div>
    </section>

    <div class="container mt-8">
      <div class="row justify-content-center">
          <div class="card custom-card">
              <div class="card-body">
                  <h5 class="card-title">Announcements</h5>
  
                  <!-- Bootstrap Table -->
                  <div class="table-responsive">
                      <table id="announcementTable" class="table table-striped">
                          <thead>
                              <tr>
                                  <th>Date</th>
                                  <th style="text-align: center;">Content</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php
                              $host = "localhost"; // Replace with your MySQL server host
                              $username = "root"; // Replace with your MySQL username
                              $password = ""; // Replace with your MySQL password
                              $database = "webproj"; // Replace with your database name

                              $conn = new mysqli($host, $username, $password, $database);

                              // Check the database connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }

                              $sql = "SELECT * FROM announcements";
                              $result = mysqli_query($conn, $sql);
                              
                              if(mysqli_num_rows($result) > 0) {
                                while($row = $result->fetch_assoc()) {
                                  echo "<tr><th style='color: #012970;'>" . $row['created_at'] . "</th><th style='color: #012970;'>" . $row['content'] . "</th><th style='color: #012970;'><a href='deleteActivity.php?id=" . $row['id'] . "'><button class='btn btn-danger'>Delete</button></a></th></tr>";
                                }
                              }
                            ?>
                              <!-- Announcement rows will be inserted here -->
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
    </div>
      </div>

    


      <script>
        // Function to load announcements from localStorage and populate the table
        function loadAnnouncements() {
          var announcements = JSON.parse(localStorage.getItem("announcements")) || [];
      
          const table = document.getElementById('announcementTable');
      
          if (announcements.length === 0) {
            // Display "No announcement posted yet" if there are no announcements
            table.innerHTML = "<tr><td colspan='3'>No announcement posted yet</td></tr>";
          } else {
            // Clear the existing table content
            table.innerHTML = "<tr><th style='color: #012970;'>Date</th><th style='color: #012970;'>Content</th><th style='color: #012970;'>Actions</th></tr>";
      
            // Reverse the order to show the latest on top
            announcements.reverse();
      
            announcements.forEach(function (announcement, index) {
              const row = table.insertRow(-1); // Append to the end of the table
              const cell1 = row.insertCell(0);
              const cell2 = row.insertCell(1);
              const cell3 = row.insertCell(2);
      
              cell1.innerHTML = announcement.date;
              // Use <pre> tag for content to preserve line breaks
              cell2.innerHTML = '<pre>' + announcement.content + '</pre>';

      
              // Create a delete button
              const deleteButton = document.createElement("button");
              deleteButton.innerText = "Delete";
              deleteButton.classList.add("btn", "btn-danger");
              deleteButton.addEventListener("click", function () {
                // Remove the announcement when the delete button is clicked
                announcements.splice(index, 1);
                localStorage.setItem("announcements", JSON.stringify(announcements));
                loadAnnouncements(); // Reload the table after deletion
              });
              
              cell3.appendChild(deleteButton);
            });
          }
        }
      
        // Load announcements when the page loads
        // loadAnnouncements();
      </script>


  </main><!-- End #main -->
</body>
<!-- ======= Footer ======= -->

<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>TaskManager</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</html>