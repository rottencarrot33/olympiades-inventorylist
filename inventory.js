
// var fixedNumbers = [
//     [6, 9, 12, 18, 21, 24, 36],
//     [2, 3, 4, 6, 7, 8, 12],
//     [2, 3, 4, 6, 7, 8, 12],
//     [4, 6, 8, 12, 14, 16, 24],
//     [2, 3, 4, 6, 7, 8, 12],
//     [4, 6, 8, 12, 14, 16, 24],
//     [4, 6, 8, 12, 14, 16, 24],
//     [4, 6, 8, 12, 14, 16, 24],
//     [4, 6, 8, 12, 14, 16, 24],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1],
//     [1, 1, 1, 1, 1, 1, 1]
// ];


// var names = ["Dinner/soup plate", "Small plate", "Bowl", "Glass", "Mug", "Fork", "Table spoon", "Coffee spoon",
//     "Butter knife", "Big cutting knife", "Small cutting knife", "Bread knife", "Potato peeler", "Spatula", "Corkscrew",
//     "Can opener", "Cutting board", "Big pan/pot", "Small pan/pot", "Frying pan", "Salad bowl", "Oven dish", "Colander",
//     "Jug", "Heatproof mat", "Coffee machine", "Microwave", "Vacuum cleaner", "Toilet brush"];

var arrivalDatepicker = flatpickr("#arrivalDate", {
    dateFormat: "d/m/Y",
    minDate: new Date().fp_incr(-3),
    onChange: function (selectedDates, dateStr, instance) {

        departureDatepicker.set("minDate", dateStr);
    }
});

var departureDatepicker = flatpickr("#departureDate", {
    dateFormat: "d/m/Y",
    minDate: new Date()
});

// generate rows in the table
// $(document).ready(function () {
//     var tbody = $('tbody');
//     for (var i = 0; i < 29; i++) {
//         var row = $('<tr id="row' + (i + 1) + '">' +
//             '<th scope="row">' + (i + 1) + '</th>' +
//             '<td>' + names[i] + '</td>' +
//             '<td>' + fixedNumbers[i][0] + ' <input type="text" class="form-control" style="width: 50px;" name="type' + (i + 1) + '" placeholder=""></td>' +
//             '<td>' + fixedNumbers[i][1] + ' <input type="text" class="form-control" style="width: 50px;" name="type' + (i + 1) + '" placeholder=""></td>' +
//             '<td>' + fixedNumbers[i][2] + ' <input type="text" class="form-control" style="width: 50px;" name="type' + (i + 1) + '" placeholder=""></td>' +
//             '<td>' + fixedNumbers[i][3] + ' <input type="text" class="form-control" style="width: 50px;" name="type' + (i + 1) + '" placeholder=""></td>' +
//             '<td>' + fixedNumbers[i][4] + ' <input type="text" class="form-control" style="width: 50px;" name="type' + (i + 1) + '" placeholder=""></td>' +
//             '<td>' + fixedNumbers[i][5] + ' <input type="text" class="form-control" style="width: 50px;" name="type' + (i + 1) + '" placeholder=""></td>' +
//             '<td>' + fixedNumbers[i][6] + ' <input type="text" class="form-control" style="width: 50px;" name="type' + (i + 1) + '" placeholder=""></td></tr>');
//         tbody.append(row);
//     }
// });