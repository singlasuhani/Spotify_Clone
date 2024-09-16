function toggleLike(songTitle) {
    const likedSongs = JSON.parse(localStorage.getItem('likedSongs')) || [];
    const index = likedSongs.indexOf(songTitle);

    if (index > -1) {
        likedSongs.splice(index, 1); // Remove song if already liked
    } else {
        likedSongs.push(songTitle); // Add song if not already liked
    }

    localStorage.setItem('likedSongs', JSON.stringify(likedSongs));
    updateIconState();
}

function updateIconState() {
    const likedSongs = JSON.parse(localStorage.getItem('likedSongs')) || [];
    document.querySelectorAll('.heart-icon').forEach(icon => {
        const songTitle = icon.dataset.song;
        if (likedSongs.includes(songTitle)) {
            icon.classList.add('liked');
        } else {
            icon.classList.remove('liked');
        }
    });
}

function displayLikedSongs() {
    const likedSongs = JSON.parse(localStorage.getItem('likedSongs')) || [];
    const likedSongsList = document.getElementById('likedSongsList');
    likedSongsList.innerHTML = ''; // Clear existing entries

    likedSongs.forEach(songTitle => {
        const li = document.createElement('li');
        li.textContent = songTitle;
        likedSongsList.appendChild(li);
    });
}

document.addEventListener('DOMContentLoaded', function() {
    updateIconState();
    const icons = document.querySelectorAll('.heart-icon');
    icons.forEach(icon => {
        icon.addEventListener('click', function() {
            toggleLike(this.dataset.song);
        });
    });
});
