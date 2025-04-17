<div class="multi-link-container-img" >
  <span class="linked-text-img" >Click to Show Image 1</span>
  <div class="image-dialog" >
    <figure>
        <img src="../images/unnamed.png" alt="Image 1">
        <figcaption>The Parable of the Sower</figcaption>
    </figure>
  </div>
</div>

<div class="multi-link-container-img" >
  <span class="linked-text-img" >Click to Show Image 2</span>
  <div class="image-dialog" >
    <img src="../images/banner.webp" alt="Image 2">
  </div>
</div>

<div class="multi-link-container-img" >
  <span class="linked-text-img" >Click to Show Image 3</span>
  <div class="image-dialog" >
    <img src="../images/banner2.webp" alt="Image 3">
  </div>
</div>


<style>
  .multi-link-container-img {
    display: inline-block;
    position: relative;
    margin-bottom: 20px; /* Add spacing between the link/image sets */
  }

  .linked-text-img {
    cursor: pointer;
    color: blue;
    text-decoration: underline;
  }

  .image-dialog {
  display: none; /* Initially hidden */
  position: fixed; /* Stay fixed relative to the viewport */
  top: 50%; /* Position in the vertical center */
  left: 50%; /* Position in the horizontal center */
  transform: translate(-50%, -50%); /* Center the dialog precisely */
  background-color: #f9f9f9;
  border: 1px solid #ccc;
  padding: 15px;
  z-index: 1000; /* Ensure it's on top */
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
  text-align: center; /* Center the image */
  opacity: 0; /* Initially set opacity to 0 for the fade-in effect */
  transition: opacity 0.3s ease-in-out; /* Transition the opacity property */
}

.image-dialog.visible {
  display: block; /* Make it visible */
  opacity: 1; /* Fade it in */
}

  .image-dialog img {
    display: block;
    max-width: 90vw; /* Limit image width to viewport width */
    max-height: 90vh; /* Limit image height to viewport height */
    height: auto;
    margin: 0 auto; /* Center the image within the dialog */
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
  const containers = document.querySelectorAll('.multi-link-container-img');
  let currentlyOpenDialog = null;

  containers.forEach(container => {
    const linkedText = container.querySelector('.linked-text-img');
    const imageDialog = container.querySelector('.image-dialog');

    if (linkedText && imageDialog) {
      linkedText.addEventListener('click', (event) => {
        event.stopPropagation();

        // Close the currently open dialog
        if (currentlyOpenDialog) {
          currentlyOpenDialog.classList.remove('visible');
          // Optionally, add a delay before setting display: none
          setTimeout(() => {
            if (currentlyOpenDialog && !currentlyOpenDialog.classList.contains('visible')) {
              currentlyOpenDialog.style.display = 'none';
            }
          }, 300); // Same duration as the transition
        }

        // Open the current dialog
        imageDialog.style.display = 'block';
        // Force a reflow to ensure the transition starts from opacity 0
        imageDialog.offsetHeight;
        imageDialog.classList.add('visible');
        currentlyOpenDialog = imageDialog;
      });
    }
  });

  // Close any open image dialog when clicking outside
  document.addEventListener('click', (event) => {
    if (currentlyOpenDialog && !currentlyOpenDialog.contains(event.target) && !Array.from(containers).some(cont => cont.contains(event.target))) {
      currentlyOpenDialog.classList.remove('visible');
      setTimeout(() => {
        currentlyOpenDialog.style.display = 'none';
        currentlyOpenDialog = null;
      }, 300);
    }
  });

  // Close dialog on pressing the Escape key
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && currentlyOpenDialog) {
      currentlyOpenDialog.classList.remove('visible');
      setTimeout(() => {
        currentlyOpenDialog.style.display = 'none';
        currentlyOpenDialog = null;
      }, 300);
    }
  });
});
</script>