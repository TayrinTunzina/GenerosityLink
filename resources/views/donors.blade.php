<!DOCTYPE html>
<html>
<head>
<title>Donors</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="{{asset('donors_assets/donors.css')}}">

</head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>
    </div>
  </div>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="w3-right w3-bar-item w3-button w3-padding-large w3-theme-d5" type="submit"><i class="fa fa-home w3-margin-right"></i>Logout</button>
  </form>

 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container"><br>
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fas fa-pencil-alt fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> London, UK</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button  class="w3-button w3-block w3-theme-l1 w3-left-align" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i> Create Donation Post</button>




        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;" id="myModalLabel">Create Donation Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="font-family: 'Roboto', sans-serif;">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="file">Select pictures of item:</label>
                    <input type="file" class="form-control-file" id="file" name="file">
                  </div>
                  <div class="form-group">
                  <label for="category">Donation Category:</label>
                    <select class="form-control" id="category" name="category">
                        <option value="" selected disabled>Select a category</option>
                        <option value="clothing">Clothing</option>
                        <option value="electronics">Electronics</option>
                        <option value="furniture">Furniture</option>
                        <option value="books">Books</option>
                    </select>
                  </div>
				  <div class="form-group">
					<label for="description">Write Description:</label>
					<textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter your description here"></textarea>
				  </div>
                  <button type="submit" class="w3-button w3-theme fas fa-pencil-alt" name="send_file">&nbsp; Post</button>
                </form>
              </div>
            </div>
          </div>
        </div>









          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fas fa-paw w3-margin-right"></i> Upload Pet Video</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Posts</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>

        </div>      
      </div>
      <br>
      
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">


              <!-- Header -->
              <header id="portfolio">
                <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
                <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
                <div class="w3-container"><br>
					<h1><b>Campaigns</b></h1>
					<div class="w3-section w3-bottombar w3-padding-16">
						<input style="box-shadow: 0px 1px 3px 3px #0e0c3d; width: 400px;" class="form-control font-bold" id="myInput" type="text" placeholder="Search..." onkeyup="search()">
					</div>
                </div>
              </header>


              <div class="w3-container w3-card w3-white w3-round w3-margin campaigns"><br>
                <span class="w3-right w3-opacity">1 min</span>
                <h4>John Doe</h4><br>
                <hr class="w3-clear">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                      <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                    </div>
                    <div class="w3-half">
                      <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
                  </div>
                </div>
                <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom" data-toggle="modal" data-target="#myModal2"><i class="fas fa-hand-holding-usd"></i>  Donate</button> 
              </div>

		<!-- Modal 2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="font-family: 'Rubik', sans-serif;" id="myModalLabel">Donation Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="font-family: 'Roboto', sans-serif;">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                  </div>

                  <div class="form-group">
                      <label for="phone">Phone:</label>
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                  </div>
                  <div class="form-group">
                  <label for="category">Payment Method:</label>
                    <select class="form-control" id="payment" name="payment">
                        <option value="" selected disabled>Select payment method</option>
                        <option value="bKash">bKash</option>
                        <option value="creditcard">Credit Card</option>
                    </select>    
                  </div>

				<div class="frDonation">
					<span class="frPercentage">10%</span>
					<div class="frPie"><span style="height:46px;"></span></div>
					<div class="frAmount">
						<label>Tk</label>
						<input type="text" id="frAmount_2" name="amount" value="" class="frText frW70 frAmountText">
					</div>
					<button class="frButton frButtonDonate">Donate</button>
				</div>

				<div class="frCampaignStat">
					<div class="frLeftCol">
						<label><span>Tk10000.00&nbsp;</span>needed</label>
						<label><abbr>Tk1000.00</abbr>&nbsp;received</label>
					</div>
					<div class="frRightCol">
						<label class="frTimer"><span>1120&nbsp;</span>days left</label>
						<label>1&nbsp;donation&nbsp;&nbsp;</label>
					</div>
			</div>



                </form>
              </div>
            </div>
          </div>
        </div>



              <!-- Pagination -->
              <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                  <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                  <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
      
      <div><br>

    </div>
      
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
        <br><p><strong>Services:</strong></p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">

          <p><button class="w3-button w3-block w3-theme-l4">Items Donation</button></p>
          <p><button class="w3-button w3-block w3-theme-l4">Food Donations</button></p>
          <p><button class="w3-button w3-block w3-theme-l4">Pet Adoption</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>
 
<script>

	function search() {

	var searchInput = document.getElementById("myInput").value.toLowerCase();

	var elements = document.getElementsByClassName("campaigns");

	// Loop through the elements and check if the search input matches the content
	for (var i = 0; i < elements.length; i++) {
	var content = elements[i].innerText.toLowerCase();
	if (content.includes(searchInput)) {
		elements[i].style.display = "block";
	} else {
		elements[i].style.display = "none";
	}
	}
}

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html> 
