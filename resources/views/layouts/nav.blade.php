<!DOCTYPE html>
<head>

    <html lang="en" dir="ltr"></html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->
  </head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}

.sidebar_menu{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #F2B216;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}

.sidebar_menu .Logo{
  height: 60px;
  display: flex;
  align-items: center;
  position: relative;
}

.sidebar_menu .Logo .Text_Logo{
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}

.sidebar_menu.open{
  width: 260px;
}

.sidebar_menu .Logo #Button{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}

.sidebar_menu .Logo .icon{
  opacity: 0;
  transition: all 0.5s ease;
}

.sidebar_menu.open .Logo .icon,
.sidebar_menu.open .Logo .Text_Logo{
  opacity: 1;
}


.sidebar_menu.open .Logo #Button{
  text-align: right;
}

.sidebar_menu i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}

.sidebar_menu .Nav_Item{
  margin-top: 20px;
  height: 100%;
}

.sidebar_menu li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}

.sidebar_menu li .Menu_btn{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.382);
  padding: 6px 12px;
  border-radius: 6px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}

.sidebar_menu li:hover .Menu_btn{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}

.sidebar_menu.open li .Menu_btn{
  display: none;
}

.sidebar_menu input{
  font-size: 15px;
  color: rgba(0, 0, 0, 0.382);
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 17px;
  transition: all 0.5s ease;
  background: #ffffff;
}

.sidebar_menu.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}

.sidebar_menu .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #F2B216;
  color: #FFF;
}

.sidebar_menu.open .bx-search:hover{
  background: #bb00fd;
  color: #FFF;
}

.sidebar_menu .bx-search:hover{
  background: #FFF;
  color: #bb00fd;
}

.sidebar_menu li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 17px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #F2B216;
}

.sidebar_menu li a:hover{
  background: #FFF;
}

.sidebar_menu li a .Item_Name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}

.sidebar_menu.open li a .Item_Name{
  opacity: 1;
  pointer-events: auto;
}

.sidebar_menu li a:hover .Item_Name,
.sidebar_menu li a:hover i{
  transition: all 0.5s ease;
  color: #bb00fd;
}

.sidebar_menu li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 17px;
}

.sidebar_menu li.Details{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #bb00fd;
  transition: all 0.5s ease;
  overflow: hidden;
}

.sidebar_menu.open li.Details{
  width: 250px;
}

.sidebar_menu li .Child_Details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}

.sidebar_menu li img{
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 14px;
  margin-right: 10px;
}

.sidebar_menu li.Details .Name,
.sidebar_menu li.Details .Roll{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
}

.sidebar_menu li.Details .Roll{
  font-size: 12px;
}

.sidebar_menu .Details #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #F2B216;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}

.sidebar_menu.open .Details #log_out{
  width: 50px;
  background: none;
}

.Dashboard_Text{
  position: relative;
  background: #FFFFFF;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}

.sidebar_menu.open ~ .Dashboard_Text{
  left: 250px;
  width: calc(100% - 250px);
}

.Dashboard_Text .Child_Text{
  display: inline-block;
  color: #ae1e97;
  font-size: 22px;
  font-weight: 450;
  margin: 14px;
}

@media (max-width: 420px) {
  .sidebar_menu li .Menu_btn{
    display: none;
  }
}

</style>
<body>
  <div class="sidebar_menu">
    <div class="Logo">
        <img src ="{{ Vite::asset('resources/images/telpro.png') }}" alt="image" class="img bx bxl-slack icon" width="30%">
          <div class="Text_Logo">TELPRO V</div>
          <i class='bx bx-menu' id="Button" ></i>
      </div>
      <ul class="Nav_Item">
          <li>
              <i class='bx bx-search' ></i>
            <input type="text" placeholder="Search....">
            <span class="Menu_btn">Search</span>
          </li>

        <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="Item_Name">Dashboard</span>
        </a>
          <span class="Menu_btn">Dashboard</span>
        </li>

        <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="Item_Name">Procurement</span>
        </a>
        <span class="Menu_btn">Procurement</span>
        </li>

        <li>
        <a href="#">
        <i class='bx bxs-star-half'></i>
        <span class="Item_Name">Human Resource</span>
        </a>
        <span class="Menu_btn">Human Resource</span>
        </li>

      <li>
        <a href="#">
        <i class='bx bx-trip'></i>
        <span class="Item_Name">Finance</span>
        </a>
        <span class="Menu_btn">Finance</span>
      </li>


        <li>
        <a href="#">
        <i class='bx bx-bell'></i>
        <span class="Item_Name">Notifications</span>
        </a>
        <span class="Menu_btn">Notifications</span>
        </li>

      </ul>
  </div>

        <section class="Dashboard_Text">
        <div class="Child_Text">Dashboard</div>
        </section>

  <script>
    let sidebar = document.querySelector(".sidebar_menu");
    let closeBtn = document.querySelector("#Button");
    let searchBtn = document.querySelector(".bx-search");
    closeBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("open");
      menuBtnChange();
    });
    searchBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("open");
      menuBtnChange();
    });
    function menuBtnChange() {
    if(sidebar.classList.contains("open")){
    closeBtn.classList.replace("bx-menu", "bxs-x-circle");
    }else {
    closeBtn.classList.replace("bxs-x-circle","bx-menu");
    }
    }
  </script>

</body>
</html>
