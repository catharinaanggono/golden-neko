function move(name){
    localStorage.setItem("name", name);
    window.location.href = 'booking.php';
}

function move_movie(movie_name){
    localStorage.setItem("movie_name", movie_name);
    window.location.href = 'booking.php';
}
