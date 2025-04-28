$(document).ready(function() {
  let currentIndex = 0;
  const images = $('.thumbnail');

  // Function to show the preview area
  function showPreview(index) {
      const fullImage = $(images[index]).data('full');
      $('.full-image').attr('src', fullImage);
      $('.preview-area').show();
      currentIndex = index;
  }

  // Thumbnail click event
  $('.thumbnail').on('click', function() {
      const index = images.index(this);
      showPreview(index);
  });

  // Next button click event
  $('.next-btn').on('click', function() {
      currentIndex = (currentIndex + 1) % images.length;
      showPreview(currentIndex);
  });

  // Previous button click event
  $('.prev-btn').on('click', function() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      showPreview(currentIndex);
  });

  // Close button click event
  $('.close-btn').on('click', function() {
      $('.preview-area').hide();
  });
});