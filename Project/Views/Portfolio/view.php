
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Ayndre Illustrator</title>
    <link rel="stylesheet" href="../../Ayndre-Illustrator/project/CSS/storePage.css"> 
<body>

    <header>
            <?php include './Views/nav.php'; ?>
    </header>

    <main>
    <div class="portfolio-container">
    <link rel="stylesheet" href="../../Ayndre-Illustrator/project/CSS/portfolioPage.css"> 
<main>
<div class="portfolio-container">
    <!-- Header Section -->
    

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
           
        </div>
        <div class="portfolio-item">
            <img src="../images/queen_of_dusk.jpg" alt="Queen of Dusk">
            <p>Queen Of Dusk</p>
           
        </div>
        <div class="portfolio-item">
            <img src="../images/kill_bill.jpg" alt="Should She Kill Bill">
            <p>Should She Kill Bill?</p>
            
        </div>
        <div class="portfolio-item">
            <img src="../images/vice_city_girl.jpg" alt="Vice City Girl">
            <p>Vice City Girl</p>
           
        </div>
        <div class="portfolio-item">
            <img src="../../Ayndre-Illustrator/project/images/vice_city_girl.jpg" alt="Vice City Girl">
            <p>Vice City Girl</p>
            <p class="price">$45.00</p>
        </div>
        <div class="portfolio-item">
            <img src="../../Ayndre-Illustrator/project/images/mandalorian_woman.jpg" alt="The Mandalorian Woman">
            <p>The Mandalorian Woman</p>
            
        </div>
        <div class="portfolio-item">
            <img src="../../Ayndre-Illustrator/project/images/jedi_woman.jpg" alt="Jedi Woman">
            <p>Jedi Woman</p>
            
        </div>
        <div class="portfolio-item">
            <img src="../../Ayndre-Illustrator/project/images/queen_of_dusk_cat.jpg" alt="Queen of Dusk with Cat">
            <p>Queen Of Dusk with Cat</p>
           
        </div>
        <div class="portfolio-item">
            <img src="../../Ayndre-Illustrator/project/images/arabian_girl.jpg" alt="Arabian Girl Portrait">
            <p>Arabian Girl Portrait</p>
           
        </div>
        <div class="portfolio-item">
            <img src="../../Ayndre-Illustrator/project/images/vice_city_girl.jpg" alt="Vice City Girl">
            <p>Vice City Girl</p>
            
        </div>
    </div>

    </main>


    <script>

        function filterByYear() 
        {
            const year = document.getElementById("yearFilter").value;
            // Implement year-based filtering functionality here if needed
        }

        function requestCommission() 
        {
            alert("Redirecting to commission request form...");
            // Redirect to commission request page or open a form
        }
    </script>
</body>
</html>
