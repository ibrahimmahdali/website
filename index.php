<?php include= 'config.php';?>
<?php
	
	include 'config.php';

	if (isset($_POST['post'])) {

		$tital = $_POST['tital'];
		$name = $_POST['name'];
		$Feedback = $_POST['Feedback'];
		
		$sql = "INSERT INTO demo (tital, name, message)
		VALUES ('$tital','$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="8-utf/">
    <meta name="dicrepiton" contect='the website used to provide the user experince and then view those informatiom to people to chose good decision' />
    <title>use experince </title>
</head>

<body>
    <header>
        <div class="header">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Feedback.html">Reviews</a></li>
                <li><a href="#footer">Contact us</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="gallery">
            <p>
                <a href="https://www.trivago.com"  onclick = "show('trivago')" target="_black">
                    <img src="img/image.1.png" alt="imag">
                </a>
            </p>
            <div class="desc">trivago</div>
        </div>

        <div class="gallery">
            <p>
                <a href="https://www.Hotels.com" onclick = "show('Hotels')" target="_black"  >
                    <img src="img/2.image_800x536 (1).jpg" alt="IMG" >
                </a>
            </p>
            <div class="desc">Hotels</div>
        </div>

        <div class="gallery">
            <p>
                <a href="https://www.Booking.com" onclick = "show('Booking')" target="_black">
                    <img src="img/3_800x509.jpg" alt="IMG">
                </a>
            </p>
            <div class="desc">Booking</div>
        </div>
        <div class="gallery">
            <p>
                <a href="http://www.almosafer.com" onclick = "show('almosafer')" target="_black">
                    <img src="img/4.png" alt="IMG"  >
                </a>
            </p>
            <div class="desc">almosafer</div>

        </div>
        <div class="gallery">
            <p>
                <a href="https://www.skyscanner.com" onclick = "show('skyscanner')" target="_black">
                    <img src="img/5.jpg" alt="IMG"  >
                </a>
            </p>
            <div class="desc">skyscanner</div>
        </div>
        <div class="gallery">
            <p>
                <a href="https://www.Agoda.com" onclick = "show('Agoda')" target="_black">
                    <img src="img/14.jfif" alt="IMG"  >
                </a>
            </p>
            <div class="desc">Agoda</div>
        </div>
        <div class="gallery">
            <p>
                <a href="https://www.HotelsCombined.com" onclick = "show('HotelsCombined')" target="_black">
                    <img src="img/15.gif" alt="IMG"  >
                </a>
            </p>
            <div class="desc">HotelsCombined</div>
        </div>
        <div class="gallery">
            <p>
                <a href="https://www.Expedia.com" onclick = "show('Expedia')" target="_black">
                    <img src="img/16.jpg" alt="IMG"  >
                </a>
            </p>
            <div class="desc">Expedia</div>
        </div>
        <div class="gallery">
            <p>
                <a href="https://www.Kayak.com" onclick = "show('Kayak')" target="_black">
                    <img src="img/13.png" alt="IMG">
                </a>
            </p>
            <div class="desc">Kayak</div>
        </div>
        <div class="gallery">
            <p>
                <a href="https://www.Priceline.com" onclick = "show('Priceline')" target="_black">
                    <img src="img/10.png" alt="IMG">
                </a>
            </p>
            <div class="desc">Priceline</div>
        </div>
        <div class="gallery">
            <p>
                <a href="https://ar.airbnb.com/" onclick = "show('airbnb')" target="_black">
                    <img src="img/11.png" alt="IMG"  >
                </a>
            </p>
            <div class="desc">airbnb</div>
        </div>
        <div class="gallery">
            <p>
                <a href="https://www.TripAdvisor.com" onclick = "show('TripAdvisor')" target="_black">
                    <img src="img/12.jpg" alt="IMG"  >
                </a>
            </p>
            <div class="desc">TripAdvisor</div>
        </div>
    </div>
    <footer id="footer"><u>For more information contact with us on <strong>user.ex@gmail.com</strong><u></footer>
    <div class ="pop">
        <div class ="poppage">
            <div><a href="" onclick = "close()"><img src="img/x.svg"></a></div>
            <div class ="heada">
                <h2 id="changed" name= "tital">name</h2>
                <section class ="box">
                    <div class ="right">
                        <h3 >Name:</h3>
                        <label><input type="text" name="name"></label>
                    </div>
                </section>
                <section class ="box">
                    <div class ="right">
                        <h3 >Feedback:</h3>
                        <label class= "massge"><textarea  type="textarea" rows= "8" clos="10"  maxlength="255"  name="Feedback"></textarea></label>
                    </div>
                </section>
            </div>
            <div class ="buttom"><input id="buttom" class ="push" type="submit" value="Submit" name='post'></div>
        </div>
    </div>


     


    



</body>
<script>
    function show(name){
    document.querySelector('.pop').style.display = 'flex';
    document.getElementById("changed").innerHTML = name;
};
function close(){
    document.querySelector('.pop').style.display = 'none';
};
</script>

</html>
