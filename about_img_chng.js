var images = [
    "Images/Outside1-1.png",
    "Images/Outside2.png",
    "Images/Outside2-1.png",
    "Images/Outside3.png"
];

var currentIndex = 0;
function changeImage() {
    currentIndex++;
    if (currentIndex == images.length) {
        currentIndex = 0;
    }
    document.getElementById("about_picture").src = images[currentIndex];
}
setInterval(changeImage, 2000);