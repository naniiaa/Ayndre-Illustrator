<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Ayndre Illustrator</title>
    <link rel="stylesheet" href="../CSS/portfolioPage.css"> <!-- Link to portfolio-specific CSS file -->
	<style>
	 .card {
            display: none;
            width: 900px;
            padding: 20px;
            margin: 10px auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #f9f9f9;
        }
        
        .card-title {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }
        
        .card-info {
            font-size: 1em;
            color: #666;
            margin-bottom: 20px;
        }
        .card.show{
			display: block;
			z-index : 10;
			position: fixed;
		}
        .add-button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #45a049;
        }
	</style>
</head>
<body>
    <!-- Header Section -->
    <header>
         <?php include './Views/nav.php'; ?>
    </header>
		<button class="close-button" onclick="closeCard()">✕</button>
        <div class="card-title">NAME OF THE PIECE</div>
        <div class="card-info">SOMETHING TO DISPLAY<br>SOMETHING TO DISPLAY<br> SOMETHING TO DISPLAY </div>
		<form method="POST" action="./Controllers/StoreController.php">
			<button class="add-button" type="submit">Add to cart</button>
		</form>
    </div>
    <!-- Navigation Bar for Portfolio Years -->
    <div class="portfolio-nav">
        <select id="yearFilter" onchange="filterByYear()">
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
        </select>
    </div>
    <!-- Portfolio Grid -->
    <div class="portfolio-grid">
        <!-- Portfolio Items -->
        <div class="portfolio-item" onclick="showCard()">
            <img src="../images/fly_for_her.jpg" alt="Fly for Her">
            <p>Fly For Her - Star Wars</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item" onclick="showCard()">
            <img src="../images/queen_of_dusk.jpg" alt="Queen of Dusk">
            <p>Queen Of Dusk</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item" onclick="showCard()">
            <img src="../images/kill_bill.jpg" alt="Should She Kill Bill">
            <p>Should She Kill Bill?</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item"	onclick="showCard()">
            <img src="../images/vice_city_girl.jpg" alt="Vice City Girl">
            <p>Vice City Girl</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item">
            <img src="../images/vice_city_girl.jpg" alt="Vice City Girl">
            <p>Vice City Girl</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item">
            <img src="../images/mandalorian_woman.jpg" alt="The Mandalorian Woman">
            <p>The Mandalorian Woman</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item">
            <img src="../images/jedi_woman.jpg" alt="Jedi Woman">
            <p>Jedi Woman</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item">
            <img src="../images/queen_of_dusk_cat.jpg" alt="Queen of Dusk with Cat">
            <p>Queen Of Dusk with Cat</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item">
            <img src="../images/arabian_girl.jpg" alt="Arabian Girl Portrait">
            <p>Arabian Girl Portrait</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item">
            <img src="../images/vice_city_girl.jpg" alt="Vice City Girl">
            <p>Vice City Girl</p>
            <p class="price">$45.00</p>
        </div>
    </div>

    <main>
        <div class="portfolio-container">
        

        <!-- Navigation Bar for Portfolio Years -->
        <div class="portfolio-nav">
            <select id="yearFilter" onchange="filterByYear()">
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
            </select>
        </div>

        <!-- Portfolio Grid -->
        <div class="portfolio-grid">
            <!-- Portfolio Items -->
            <div class="portfolio-item">
                <img src="../images/fly_for_her.jpg" alt="Fly for Her">
                <p>Fly For Her - Star Wars</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/queen_of_dusk.jpg" alt="Queen of Dusk">
                <p>Queen Of Dusk</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/kill_bill.jpg" alt="Should She Kill Bill">
                <p>Should She Kill Bill?</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/vice_city_girl.jpg" alt="Vice City Girl">
                <p>Vice City Girl</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/vice_city_girl.jpg" alt="Vice City Girl">
                <p>Vice City Girl</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/mandalorian_woman.jpg" alt="The Mandalorian Woman">
                <p>The Mandalorian Woman</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/jedi_woman.jpg" alt="Jedi Woman">
                <p>Jedi Woman</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/queen_of_dusk_cat.jpg" alt="Queen of Dusk with Cat">
                <p>Queen Of Dusk with Cat</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/arabian_girl.jpg" alt="Arabian Girl Portrait">
                <p>Arabian Girl Portrait</p>
                <p class="price">$45.00</p>
            </div>
            <div class="portfolio-item">
                <img src="../images/vice_city_girl.jpg" alt="Vice City Girl">
                <p>Vice City Girl</p>
                <p class="price">$45.00</p>
            </div>
        </div>

        <!-- Request Commission Button -->
        <div class="commission-button">
            <button onclick="requestCommission()">Request Commission</button>
        </div>
    </div>
    </main>

<script>
	function showCard() {
		alert("it works");
		const card = document.getElementById("infoCard");
		card.classList.toggle("show");
	}
    function filterByYear() {
        const year = document.getElementById("yearFilter").value;
        // Implement year-based filtering functionality here if needed
    }

    function requestCommission() {
        alert("Redirecting to commission request form...");
        // Redirect to commission request page or open a form
    }
</script>

</body>
</html>
