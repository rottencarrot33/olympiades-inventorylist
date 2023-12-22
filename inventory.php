<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.css">
    <link rel="stylesheet" href="inventory.css">
    <title>Les Olympiades Inventory List</title>
</head>

<body>

    <div class="container mt-5">
        <form action="email.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="roomNumber">Room Number</label>
                    <input pattern="\d*" title="Please enter numbers only" maxlength="3" required type="text" class="form-control" id="roomNumber" placeholder="Room Number" name="roomNum">
                </div>
                <div class="form-group col-md-4">
                    <label for="fullName">Reservation Name</label>
                    <input required type="text" class="form-control" id="fullName" placeholder="Full Name" name="roomName">
                </div>
                <div class="form-group col-md-2">
                    <label for="arrivalDate">Date of Arrival</label>
                    <input required type="text" class="form-control dates" id="arrivalDate" placeholder="dd/mm/yyyy"
                        name="arrDate">
                </div>
                <div class="form-group col-md-2">
                    <label for="departureDate">Date of Departure</label>
                    <input required type="text" class="form-control dates" id="departureDate" placeholder="dd/mm/yyyy"
                        name="depDate">
                </div>
            </div>

            <div class="mt-3 mb-3">
                <p>Fill in the inventory list. If something is missing (e.g., there are 2 fewer mugs), type the number
                    of
                    missing items in
                    the input field.</p>
            </div>

            <table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Item</th>
            <th scope="col">Studio 2 <br /> persons</th>
            <th scope="col">Studio 3 <br /> persons</th>
            <th scope="col">Studio 4 <br /> persons</th>
            <th scope="col">Apart. 6 <br /> persons</th>
            <th scope="col">Apart. 7 <br /> persons</th>
            <th scope="col">Apart. 8 <br /> persons</th>
            <th scope="col">Apart. 12 <br /> persons</th>
        </tr>
    </thead>
    <tbody>

    <?php
$fixedNumbers = [
                [6, 9, 12, 18, 21, 24, 36],
                [2, 3, 4, 6, 7, 8, 12],
                [2, 3, 4, 6, 7, 8, 12],
                [4, 6, 8, 12, 14, 16, 24],
                [2, 3, 4, 6, 7, 8, 12],
                [4, 6, 8, 12, 14, 16, 24],
                [4, 6, 8, 12, 14, 16, 24],
                [4, 6, 8, 12, 14, 16, 24],
                [4, 6, 8, 12, 14, 16, 24],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
                [1, 1, 1, 1, 1, 1, 1],
];

$names = [
    "Dinner/soup plate", "Small plate", "Bowl", "Glass", "Mug", "Fork", "Table spoon", "Coffee spoon",
    "Butter knife", "Big cutting knife", "Small cutting knife", "Bread knife", "Potato peeler", "Spatula", "Corkscrew",
    "Can opener", "Cutting board", "Big pan/pot", "Small pan/pot", "Frying pan", "Salad bowl", "Oven dish", "Colander",
    "Jug", "Heatproof mat", "Coffee machine", "Microwave", "Vacuum cleaner", "Toilet brush"
];
?>

<?php for ($i = 1; $i <= 29; $i++) : ?>
            <tr id="row<?php echo $i; ?>">
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $names[$i - 1]; ?></td>
                <?php for ($j = 1; $j <= 7; $j++) : ?>
                    <td>
                        <input pattern="\d*" title="Please enter numbers only" maxlength="2" type="text" class="form-control" style="width: 50px;" name="type<?php echo $j; ?>[]" placeholder="<?php echo $fixedNumbers[$i - 1][$j - 1]; ?>">
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        
    </tbody>
</table>


            <div class="form-group mt-4">
                <label for="roomIssues">Issues with the Room</label>
                <textarea class="form-control" id="roomIssues" rows="3"
                    placeholder="Write any issues with the room here..." name="issues"></textarea>
            </div>

           
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.6/dist/flatpickr.min.js"></script>

    <script src="inventory.js"></script>

</body>

</html>