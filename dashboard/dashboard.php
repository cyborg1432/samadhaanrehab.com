<?php
$token = $_GET['token'];
$r_token = "qwertyuiop";
if ($r_token === $token){
$mysqli = new mysqli("localhost", "root", "960ed4e74dcb54cd6363ff4b9bc8206fde0a280e96106803","rehab");
$query = "SELECT * FROM `applynow` ORDER BY `applynow`.`date` DESC ";
$result = $mysqli->query($query);
?>



<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="dashboard.css">

   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="./small-logo.jpeg" alt="img">
      <span class="logo_name">Samadhaan Rehab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
        <a href="create-post.html">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Create Post</span>
          </a>
        </li>
        
          <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
         <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="https://samadhaanrehab.com/login.html">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Samadhaan Rehab</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

      
<div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="sales-details">
            
<!-------------------------------------------Webmaster---------------------------->
<table>
<tbody class="details">

<tr>
<th class="topic">ID</th>
<th class="topic">First Name</th>
<th class="topic">Last Name</th>
<th class="topic">Phone No</th>
<th class="topic">Email</th>
<th class="topic">Date</th>

</tr>

<?php
if($result->num_rows>0){
while($row = $result->fetch_assoc()){
?>


<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['firstname']; ?></td>
<td><?php echo $row['lastname']; ?></td>
<td><a target="_blank" href="tel:<?php echo $row['phoneno'];?>"><?php echo $row['phoneno']; ?></td>
<td><a target="_blank" href="mailto:<?php echo $row['email'];?>"><?php echo $row['email']; ?></a></td>
<td><?php echo $row['date']; ?></td>
</tr>

<?php  }
}
?>

</tbody>
</table>


          </div>
        </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

<?php 

}else{
   header('Location: http://samadhaanrehab.com/403.html');
}
 ?>

<style>
table, td, th {
//  border: 1px solid;
text-align:center;
}

table {
  width: 100%;
//  border-collapse: collapse;
}
</style>
