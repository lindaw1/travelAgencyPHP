console.log("hello");

// Asks the user if they are sure that they want to submit the form.
var submitButton = document.getElementById("lindaSubmit");

submitButton.addEventListener("click", function (event) {
    event.preventDefault();
    var submitNow = confirm("Are you sure you want to submit this form?");

    if (submitNow === true) {
        console.log("submit is true");
        // Checks that all "required" input boxes have data.
        if (document.getElementById("myForm").checkValidity() === true) {
            document.getElementById("myForm").submit();
        } else {
            alert("Please fill in all the information");
        }
    } else {
        alert("Have a nice day.  Maybe you will submit another day.");
    }
});

// Asks the user if they are sure they want to reset the data on the form.
var resetButton = document.getElementById("lindaReset");

resetButton.addEventListener("click", function (event) {
    event.preventDefault();
    var resetNow = confirm("Are you sure you want to reset the information on the form?");
    if (resetNow === true) {
        console.log("reset is true");
        document.getElementById("myForm").reset();
    } else {
        alert("Reset is cancelled");
    }
});

// Assignment Day 6 - Create a table with images and descriptions using JavaScript:::

// Create an array of images

var img1 = 'http://canmoreabhomes.com/wp-content/uploads/2018/03/banff-e1522245088522.png';
var img2 = 'https://www.bcmag.ca/wp-content/uploads/2017/04/62328_max.jpg';
var img3 = 'https://s23835.pcdn.co/wp-content/uploads/2016/09/Canada-Nova-Scotia-Lunenburg-harbour-768x542.jpg';
var img4 = 'https://dminc.com/wp-content/uploads/2017/09/Montreal-copy.jpg';
var imageArray = [img1, img2, img3, img4];

// Create an array of descriptions
var desc1 = 'Banff, Alberta. Sally really likes to go here.';
var desc2 = 'Most couples love going to Vancouver.';
var desc3 = 'Nova Scotia is a great destination.';
var desc4 = 'Montreal is a great destination.';
var descArray = [desc1, desc2, desc3, desc4];

// Create an array of destination links
var destLinkArray = ['https://www.banfflakelouise.com/',
    'https://www.tourismvancouver.com/',
    'https://www.novascotia.com/',
    'https://www.mtl.org/en'];


// Create the table and top row tags
var table = document.createElement('table');
var tr = document.createElement('tr');

// Create the header tag for column1 and insert "Images" into the cell
var th1 = document.createElement('th');
var imageHeader = document.createTextNode('Images');

// Add the header tag for column1 to the Table row
th1.appendChild(imageHeader);
tr.appendChild(th1);

// Create the header tag for column2 and insert "Descriptions" into the cell
var th2 = document.createElement('th');
var descriptionHeader = document.createTextNode('Descriptions');

// Add the header tag for column2 to the Table row
th2.appendChild(descriptionHeader);
tr.appendChild(th2);

// Add the Row tag to the Table
table.appendChild(tr);

// Loop through the imageArray, creating a row tag and a data tag then inserting an image into the cell
// 1. Create a row and data tag
// 2. Insert image from the imageArray
// 3. Adding the row and data to the table row - column1
for (let i = 0; i < imageArray.length; i++) {
    var tr = document.createElement('tr');
    var td1 = document.createElement('td');
    var image = document.createElement('img');
    image.src = imageArray[i];
    image.height = "300";
    td1.appendChild(image);

    // Day 8 - add eventListener to the image to open a new window for five seconds, then close that window.
    td1.addEventListener("click", function (event) {
        var myWindow = window.open(destLinkArray[i]);
        setTimeout(function () {
            myWindow.close();
        }, 5000)
    });
    tr.appendChild(td1);
    // Day 6 - continued
    // 4. Create a data tag for column2
    // 5. Insert text from descArray
    // 6. Add the data for column2
    var td2 = document.createElement('td');
    var paragraph = document.createElement('p');
    var paragraphText = document.createTextNode(descArray[i]);
    paragraph.appendChild(paragraphText);
    td2.appendChild(paragraph);
    tr.appendChild(td2);

    // 7. steps 1-6 are added to the table after each iteration in the imageArray.
    table.appendChild(tr);
}

// new table is added to the ID called lindaTable
document.getElementById("lindaTable").appendChild(table);

// Day 7 Assignment
// 1. focus and blur input boxes with descpriton for inputBox contents

// I would like to to this with a loop and array.  But I can't get it to work
// This is what I tried:

// var tbArray = document.getElementsByTagName('input');
// for (var i = 0; i < tbArray.length; i++) {   
//     var tbObject = document.getElementById(txtInput[i]);  
//     tbObject.addEventListener("focus", function(){ShowMessage(tbObject.id)});
//     tbObject.addEventListener("blur", function(){HideMessage(tbObject.id)});
// }

// var txtInput = ['txtName', 'txtAddress', 'txtCity', 'txtProvince', 'txtPostalCode', 'txtPhone'];
// var txtDesc = ['txtNameDesc', 'txtAddressDesc', 'txtCityDesc', 'txtProvinceDesc',
//     'txtPostalCodeDesc', 'txtPhoneDesc'];

// When user clicks on the input box the ShowMessage function runs.  The HideMessage function
// runs when the user clicks outside of the input box. ShowMessage and HideMessage are below.
var tbName = document.getElementById("txtName");
tbName.addEventListener("focus", function () { ShowMessage(tbName.id) });
tbName.addEventListener("blur", function () { HideMessage(tbName.id) });


var tbAddress = document.getElementById("txtAddress");
tbAddress.addEventListener("focus", function () { ShowMessage(tbAddress.id) });
tbAddress.addEventListener("blur", function () { HideMessage(tbAddress.id) });


var tbCity = document.getElementById("txtCity");
tbCity.addEventListener("focus", function () { ShowMessage(tbCity.id) });
tbCity.addEventListener("blur", function () { HideMessage(tbCity.id) });


var tbProvince = document.getElementById("txtProvince");
tbProvince.addEventListener("focus", function () { ShowMessage(tbProvince.id) });
tbProvince.addEventListener("blur", function () { HideMessage(tbProvince.id) });


var tbPostalCode = document.getElementById("txtPostalCode");
tbPostalCode.addEventListener("focus", function () { ShowMessage(tbPostalCode.id) });
tbPostalCode.addEventListener("blur", function () { HideMessage(tbPostalCode.id) });


var tbPhone = document.getElementById("txtPhone");
tbPhone.addEventListener("focus", function () { ShowMessage(tbPhone.id) });
tbPhone.addEventListener("blur", function () { HideMessage(tbPhone.id) });

// Shows users a description of the requirements of the field.
function ShowMessage(txtBoxID) {
    var divToShow = document.getElementById(txtBoxID + "Desc");
    divToShow.style.display = "block";
}

// Hides the description after the user clicks outside of the input box.
function HideMessage(txtBoxID) {
    var divToShow = document.getElementById(txtBoxID + "Desc");
    divToShow.style.display = "none";
}