function openPopup(imageSrc) {
    var popup = document.getElementById('popup');
    var popupImage = document.getElementById('popup-image');

    popupImage.src = imageSrc;
    popup.style.display = 'block';
}

function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
}