<div class="background-selector">
    <label for="background-select" class="form-label">Background Themes:</label>
    <select id="background-select" class="form-select">
        <option value="https://i.pinimg.com/originals/b7/bc/3a/b7bc3ab00630af37012ac4686abd7f52.gif">Default</option>
        <option value="https://www.icegif.com/wp-content/uploads/2021/10/icegif-1648.gif">Space</option>
        <option value="https://www.horntorus.com/illustration/horntorusanimation10.gif">Torus</option>
        <option value="https://i.pinimg.com/originals/b5/fd/3f/b5fd3fbe984103e08b9482471484394b.gif">Mood</option>
        <option value="https://i.pinimg.com/originals/c0/d7/cb/c0d7cb6b7c65398d950beb6930ba2e35.gif">Raining</option>
        <option value="https://i.imgur.com/ZYoqazR.gif">Snowing</option>
        <option value="https://media3.giphy.com/media/H4H3NtVEWcoHS/giphy.gif?cid=6c09b952v93ms8j7alx2ivbzpvgl54oqdsa61s837ehou9w2&ep=v1_gifs_search&rid=giphy.gif&ct=g">Christmas</option>
        <option value="https://i.gifer.com/TJxE.gif">Beach</option>
        <option value="https://i.pinimg.com/originals/d7/00/1a/d7001a41030e26e52aa4a104b175c3e5.gif">Sky</option>
        <option value="https://i.pinimg.com/originals/4c/a1/96/4ca196ad250162254479b01b9a8ec27f.gif">Jungle</option>
    </select>
</div>

<script>
    // Function to set the background based on the selected option
    function setBackground(imageUrl) {
        document.body.style.backgroundImage = 'url(' + imageUrl + ')';
    }

    // Check if there's a saved background in localStorage
    const savedBackground = localStorage.getItem('selectedBackground');

    if (savedBackground) {
        setBackground(savedBackground); // Set the background to the saved value
        document.getElementById('background-select').value = savedBackground; // Set the dropdown to the saved value
    }

    // Event listener for background selection change
    document.getElementById('background-select').addEventListener('change', function() {
        const selectedBackground = this.value;
        setBackground(selectedBackground); // Set the new background
        localStorage.setItem('selectedBackground', selectedBackground); // Save the selected background in localStorage
    });
</script>