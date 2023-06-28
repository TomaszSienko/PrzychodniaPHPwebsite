const button_right = document.getElementById("doctor_change_button_right");
const button_left = document.getElementById("doctor_change_button_left");
const image = document.getElementById("doctor_image");
const docName= document.getElementById("docName");
const specName= document.getElementById("specName");
const boxdoc1= document.getElementById("box_doc1");
const boxdoc2= document.getElementById("box_doc2");
const boxdoc3= document.getElementById("box_doc3");
const boxdoc4= document.getElementById("box_doc4");




let currentImageIndex = 0;

const imageFiles = ['Images/lekarz1.png', 'Images/Lekarz2.png', 'Images/Lekarz3.png', 'Images/Lekarz4.png' ];
const docsNames=["Anna Nowak","Piotr Kowalski","Magdalena Lis","Krzysztof Majewski"];
const specNames=["kardiolog","neurolog","pediatra","ginekolog"];
const infoDocs = [boxdoc1,boxdoc2,boxdoc3,boxdoc4];


image.src = imageFiles[currentImageIndex];
docName.textContent = docsNames[currentImageIndex];
specName.textContent = specNames[currentImageIndex];
boxdoc1.style.display = "block";


button_right.addEventListener('click', function() 
{
  currentImageIndex = (currentImageIndex + 1) % imageFiles.length;
  image.src = imageFiles[currentImageIndex];

  docName.textContent = docsNames[currentImageIndex];
  specName.textContent = specNames[currentImageIndex];
  infoDocs.forEach(function(element)
  {
    element.style.display = "none";
  });
  infoDocs[currentImageIndex].style.display="block";


});

button_left.addEventListener('click', function()
    {
    currentImageIndex = (currentImageIndex +3 ) % imageFiles.length;
    image.src = imageFiles[currentImageIndex];
    docName.textContent = docsNames[currentImageIndex];
    specName.textContent = specNames[currentImageIndex];
    infoDocs.forEach(function(element)
    {
      element.style.display = "none";
    });
    infoDocs[currentImageIndex].style.display="block";
  });