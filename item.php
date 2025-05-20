<body>
    <?php echo"<h1 class='productTitle'>$name</h1>"?>
    <div class="card mb-3" >
        <div class="row g-0">
            <div class="col-md-4">
                <?php echo "<img src=$source class='img-fluid rounded-start' alt='...'>";?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <?php echo"
                    <p class='card-text'>$description</p>
                    <p class='card-text'><small class='text-body-secondary'>$price €</small></p>"?>
                </div>
            </div>
        </div>
    </div>
</body>



